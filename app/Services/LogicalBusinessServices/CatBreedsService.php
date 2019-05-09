<?php

namespace App\Services\LogicalBusinessServices

use Interop\Container\ContainerInterface;
use Illuminate\Support\Facades\DB;
use App\Models\QueryCache;
use App\Models\CatBreeds;

class CatBreedsServices {

	private $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;		
	}

	public function searchBreedsByName(string $query) : array
	{
		$cachedQuery = QueryCache::where('query', $query)->firstOrFail();
		if($cachedQuery){
			return json_decode($cachedQuery->data);
		}
		
	}

	public function searchBreedsByExperimental(int $query) : array
	{

		if(DB::connection()->getPdo() 
			&& $breeds = CatBreeds::where('experimental', $query)->all()){
			// find in model the search
		} else {
			// return an failure
		}
		
	}
}