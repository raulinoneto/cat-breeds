<?php

namespace App\Services\LogicalBusinessServices;

use Interop\Container\ContainerInterface;
use Illuminate\Support\Facades\DB;
use App\Models\QueryCache;
use App\Models\CatBreeds;
use App\Helpers\ConnectionHelper;
use App\Services\TheCatAPIServices\BreedsService;

class CatBreedsService {
	
	private $container;
	private $hasDBConnection;
	public $hasError;
	
	/**
	* @param ContainerInterface	container
	*/
	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
		$this->hasError = false;
		$this->hasDBConnection = ConnectionHelper::hasDatabaseConnection($container);
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
				$this->container->thecatapi->apiKey,
				$this->container->thecatapi->apiUrl
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
			$cachedQuery = QueryCache::where('query', $query)->firstOrFail();
			if ($cachedQuery) {
				// return cached search
				return json_decode($cachedQuery->data);
			}
			// discard ununsable variable
			unset($cachedQuery);
			
			// search at the cat api for results
			$apiData = $this->searchBreedsApi($query);
			if(!$this->hasError){
				// send to database for cache results
				CatBreedsFactoryService::saveBreeds($apiData['data']);
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
		return CatBreeds::where('experimental', $query)->all();	
		
	}

	/**
	* Search cat breed by ID key provided in query
	*
	* @param string 	query
	* @return array
	*/
	public function searchBreedsByID(int $id) : array
	{
		// check if database is connected
		if(!$this->hasDBConnection){
			return $this->buildDBErrorMessage();
		}
		// return cat breeds like a query
		return CatBreeds::findOrFail($id);	
		
	}
}