<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

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
	public function index(Request $request, Response $response, array $args): Response 
	{
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
        	return $response->withJson(['breed' => 'example']);
	}
}
