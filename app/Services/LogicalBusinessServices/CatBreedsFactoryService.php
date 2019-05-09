<?php
namespace App\Services\LogicalBusinessServices;

use Interop\Container\ContainerInterface;
use App\Models\QueryCache;
use App\Models\CatBreeds;

class CatBreedsFactoryService 
{

	/**
	* Send breeds to save in correct place
	*
	* @param string	query
	* @param array	breeds
	*/
	public static function saveBreeds(string $query, array $breeds)
	{
		self::saveCache($query, $breeds);
		self::saveBreeds($breeds);
	}

	/**
	* Save cache query in database to future querys
	*
	* @param string	query
	* @param array	breeds
	*/
	private static function saveCache(string $query, array $breeds)
	{
		// verifying if the query exists in database for update
		$queryCache = QueryCache::where('query', $query)->firstOrFail();
		
		// if query doesn't exists create a new querycache
		if(!$queryCache){
			$queryCache = new QueryCache();
			$queryCache->query = $query;
		}

		//transforming data in json
		$queryCache->data = json_encode($breeds);
		// saving data
		$queryCache->save();
	}
	
	/**
	* Save all searched breeds in database
	*
	* @param array	breeds
	*/
	private static function saveBreeds(array $breeds)
	{
		// save all breed like a unique record in database
		foreach ($breeds as $breed) {
			//verifying if breed exists in database
			$queryCache = CatBreeds::where('query', $query)->firstOrFail();
			// go to the next if breed exists
			if($queryCache){
				continue;
			}

			// instance a new breed
			$queryCache = new CatBreeds();

			// parsing data to breed
			$catBreed->api_id = $breed->api_id;
			$catBreed->name = $breed->name;
			$catBreed->temperament = $breed->temperament;
			$catBreed->life_span = $breed->life_span;
			$catBreed->alt_names = $breed->alt_names;
			$catBreed->wikipedia_url = $breed->wikipedia_url;
			$catBreed->origin = $breed->origin;
			$catBreed->weight_imperial = $breed->weight->imperial;
			$catBreed->country_code = $breed->country_code;
			$catBreed->experimental = $breed->experimental;
			$catBreed->hairless = $breed->hairless;
			$catBreed->natural = $breed->natural;
			$catBreed->rare = $breed->rare;
			$catBreed->rex = $breed->rex;
			$catBreed->suppress_tail = $breed->suppress_tail;
			$catBreed->short_legs = $breed->short_legs;
			$catBreed->hypoallergenic = $breed->hypoallergenic;
			$catBreed->adaptability = $breed->adaptability;
			$catBreed->affection_level = $breed->affection_level;
			$catBreed->child_friendly = $breed->child_friendly;
			$catBreed->dog_friendly = $breed->dog_friendly;
			$catBreed->energy_level = $breed->energy_level;
			$catBreed->grooming = $breed->grooming;
			$catBreed->health_issues = $breed->health_issues;
			$catBreed->intelligence = $breed->intelligence;
			$catBreed->shedding_level = $breed->shedding_level;
			$catBreed->stranger_friendly = $breed->stranger_friendly;
			$catBreed->vocalisation = $breed->vocalisation;

			//saving new breed
			$catBreed->save();
		}
	}
}