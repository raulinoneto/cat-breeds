<?php

namespace App\Services\LogicalBusinessServices;

use Interop\Container\ContainerInterface;
use Illuminate\Support\Facades\DB;
use App\Models\QueryCache;
use App\Models\CatBreeds;
use App\Helpers\ConnectionHelper;
use App\Services\TheCatAPIServices\BreedsService;

class CatBreedsServices {
	
	private $container;
	private $hasDBConnection;
	public $apiError;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
		$this->apiError = false;
		$this->hasDBConnection = ConnectionHelper::hasDatabaseConnection($container);
	}

	private function searchBreedsApi(string $query) : array {
		$breedsByApi = new BreedsService(
				$this->container->thecatapi->apiKey,
				$this->container->thecatapi->apiUrl
		);

		$this->apiError = $breedsByApi->error;
		$apiData = $breedsByApi->searchCatBreeds($query);
		
		return $apiData;
	}
	
	/**
	* Search cat breeds 
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
			if(!$this->apiError){
				// send to database for cache results
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

	public function searchBreedsByExperimental(int $query) : array
	{
		
		if(!$this->hasDBConnection){
			return [];
		}
		$breeds = CatBreeds::where('experimental', $query)->all();
		
		
	}
}