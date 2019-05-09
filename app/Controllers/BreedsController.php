<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Services\LogicalBusinessServices\CatBreedsService;

class BreedsController extends BaseController {

	/**
	* Search Breeds by name or by experimental indexes
	*
	* @param \Slim\Http\Request  $request
	* @param \Slim\Http\Response $response
	* @param array               $args
	*
	* @return \Slim\Http\Response
	*/
	public function search(Request $request, Response $response, array $args): Response 
	{
		$catBreed = new CatBreedsService($this->container);
		if($name = $request->getQueryParam('name')){
			$data = $catBreed->searchBreedsByName($name);
		} else if($request->getQueryParam('experimental')){
			$data = $catBreed->searchBreedsByExperimental($args['experimental']);
		} else {
			$newResponse = $response->withStatus(400);
			return $newResponse->withJson([
				'code' => 400,
				'message' => "Require name or experimental query parameter"
			]);
		}
		
		return $response->withJson(['data' => $data]);
	}

	/**
	* Return a single Breed to get breed endpoint
	*
	* @param \Slim\Http\Request  $request
	* @param \Slim\Http\Response $response
	* @param array               $args
	*
	* @return \Slim\Http\Response
	*/
	public function show(Request $request, Response $response, array $args): Response
	{	
        	$breed = CatBreeds::findOrFail($args['ID']);
        	return $response->withJson(['data' => $breed]);
	}
}
