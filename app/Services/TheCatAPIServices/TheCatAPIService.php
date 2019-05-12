<?php

namespace App\Services\TheCatAPIServices;

use Curl\Curl;

/**
* Class to connect and do requests for The Cat API
*/
class TheCatAPIService {

	/**
	* Curl object to do requests
	* @var Curl\Curl
	*/
	protected $curl;

	/**
	* Url for request
	* @var string
	*/
	protected $apiUrl;

	/**
	* API Key for authentication
	* @var string
	*/
	protected $apiKey;

	/**
	* Boolean to check if the request has any error
	* @var bool
	*/
	public $error;

	/**
	* Contructor method make bases for any request;
	* @param string		apiKey
	* @param string		apiUrl
	*/
	public function __construct(string $apiKey, string $apiUrl){
		// set API Key for authentication
		$this->apiKey = $apiKey;
		// set api url
		$this->apiUrl = $apiUrl;

		// init curl instance
		$this->init();
	}

	// private methods

	/**
	* Initialize the curl and set the authentication header
	*/
	protected function init(){
		// instace Curl class
		$this->curl = new Curl();
		// set API Key for authentication
		$this->curl->setHeader("x-api-key", $this->apiKey);
	}

}
