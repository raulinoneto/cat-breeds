<?php
use PHPUnit\Framework\TestCase;
use App\Controllers\BreedsController;

class CatBreedsEndpointsTest extends TestCase {

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testSearchEndpointWithAllServicesWorking($entry, $expected){
		$action = new BreedsController();
		$response = $action->searchBreeds($entry);
		$this->assertEquals((string)$response->getBody(), $expected);
	}

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testSearchEndpointWithOnlyDatabase($entry, $expected){
		//turn off The Cat API
		
		$action = new BreedsController();
		$response = $action->searchBreeds($entry);
		$this->assertEquals((string)$response->getBody(), $expected);
	}

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testSearchEndpointWithOnlyTheCatAPI($entry, $expected){
		//turn off Database
		
		$action = new BreedsController();
		$response = $action->searchBreeds($entry);
		$this->assertEquals((string)$response->getBody(), $expected);;
	}

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testFindOneEndpoint($entry, $expected){
		$action = new BreedsController();
		$response = $action->findOneBreed($entry);
		$this->assertEquals((string)$response->getBody(), $expected);;
	}


	public function catBreedDataObjectProvider(){
		return [
			["foo", "bar"],
		];
	}
}
