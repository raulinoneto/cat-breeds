<?php

namespace App\Services\TheCatAPIServices;

use Curl\Curl;

/**
* Class to requests in The Cat API Breeds
* Documentation at https://docs.thecatapi.com/api-reference/breeds
*/
class BreedsService extends TheCatAPIService 
{

	// public methods

	/**
	* Search cat breeds by any string, filtering by name
	* @url			https://docs.thecatapi.com/api-reference/breeds/breeds-search
	* @param string		query
	*/
	public function searchCatBreeds(string $query): array
	{
		// search endpoint
		$endpoint = "/breeds/search";
		// initialize response as an array
		$response = array();

		// check if curl channel is open
		if(!$this->curl->curl) {
			// open curl channel case isn't open
			$this->init();
		}
		// do the request in The Cat API
		$this->curl->get($this->apiUrl.$endpoint, [
			"q" => $query
		]);

		$this->error = $curl->error;
		// check if the request has any error to return a message or the restult to the client
		if ($this->error) {
		    $response = [
		    	"errorCode" => $this->curl->error_code,
		    	"message" => $this->curl->error_message
		    ];
		}
		// decode the json response if the request has success
		$response["data"] = json_decode($this->curl->response);

		// close curl channel
		$this->curl->close();

		// return the processed response
		return $response;
	}
}
