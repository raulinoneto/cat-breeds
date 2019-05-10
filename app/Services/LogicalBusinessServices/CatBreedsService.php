<?php

namespace App\Services\LogicalBusinessServices;

use Illuminate\Database\Capsule\Manager;
use App\Models\QueryCache;
use App\Models\CatBreeds;
use App\Helpers\ConnectionHelper;
use App\Services\TheCatAPIServices\BreedsService;

class CatBreedsService {
	
	private $theCatApi;
	private $hasDBConnection;
	public $hasError;
	public $apiKey;
	public $apiUrl;
	
	/**
	* @param	theCatApi
	* @param	db
	*/
	public function __construct(Manager $db, string $apiKey, string $apiUrl)
	{
		$this->apiKey = $apiKey;
		$this->apiUrl = $apiUrl;
		$this->hasError = false;
		$this->hasDBConnection = ConnectionHelper::hasDatabaseConnection($db);
	}

	/**
	* Search in the cat api breeds with name like provided query
	*
	* @param string	query
	* @return array
	*/
	private function searchBreedsApi(string $query) : array 
	{
		$breedsByApi = new BreedsService(
				$this->apiKey,
				$this->apiUrl
		);

		$this->hasError = $breedsByApi->error;
		$apiData = $breedsByApi->searchCatBreeds($query);
		
		return $apiData;
	}

	/**
	* Build error when has no database connection
	*
	* @return array
	*/
	private function buildDBErrorMessage() : array 
	{
		$this->hasError = true;
		return [
			"errorCode" => 503,
			"message" => "Could'nt connect with database"
		];
	}
	
	/**
	* Search cat breeds by name provided in query
	*
	* @param string 	query
	* @return array
	*/
	public function searchBreedsByName(string $query) : array
	{
		// Verify database connection to find it
		if($this->hasDBConnection){
			// find the cached searchs or fail
			$cachedQuery = QueryCache::where('query', "$query")->first();
			
			if ($cachedQuery) {
				// return cached search
				return ['data' => json_decode( $cachedQuery->data)];
			}
			// discard ununsable variable
			unset($cachedQuery);
			
			// search at the cat api for results
			$apiData = $this->searchBreedsApi($query);
			if(!$this->hasError){
				// send to database for cache results
				CatBreedsFactoryService::saveBreeds($query, $apiData['data']);
				// return the cat api results
				return $apiData;
			}

			// case the cat api returns some error find in stored breeds or fail
			$apiData['data']= CatBreeds::where('name', 'like', "%{$query}%")->all();

			// return the local results with error code in the cat api
			return $apiData;
						
		}
		
		// if has no database connection will search only in the cat api
		return $this->searchBreedsApi($query);
		
	}

	/**
	* Search cat breeds by experimental key provided in query
	*
	* @param string 	query
	* @return array
	*/
	public function searchBreedsByExperimental(int $query) : array
	{
		// check if database is connected
		if(!$this->hasDBConnection){
			return $this->buildDBErrorMessage();
		}
		// return cat breeds like a query
		return ['data' => CatBreeds::where('experimental', $query)->get()];	
		
	}

	/**
	* Search cat breed by ID key provided in query
	*
	* @param string 	query
	* @return array
	*/
	public function searchBreedByID(int $id)
	{
		// check if database is connected
		if(!$this->hasDBConnection){
			return $this->buildDBErrorMessage();
		}
		// return cat breeds like a query
		return CatBreeds::find($id);	
		
	}
}