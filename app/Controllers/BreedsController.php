<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\QueryCache;

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
		var_dump(@$this->container->db::connection()->getPdo());
		die();
		return $response->withJson(['foo' => 'bar']);
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
        	$requestBreedId = $args['id'];
        	return $response->withJson(['breed' => 'example	']);
	}
}
