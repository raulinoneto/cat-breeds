<?php
use PHPUnit\Framework\TestCase;
use App\Services\LogicalBusinessServices\CatBreedsService;
use App\Models\QueryCache;
use App\Models\CatBreeds;

class CatBreedsSearchTest extends TestCase {

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testSearchBreedsByName($entry, $expected){
		//Create stub gor the CatBreedsService class
		$catBreedsServiceStub = $this->createMock(CatBreedsService::class);
		$catBreedsServiceStub->method("searchBreedsByName")->willReturn(["bar"]);
		$this->assertEquals($expected, $catBreedsServiceStub->searchBreedsByName($entry));
	}

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testSearchBreedsByExperimental($entry, $expected){
		//Create stub gor the CatBreedsService class
		$catBreedsServiceStub = $this->createMock(CatBreedsService::class);
		$catBreedsServiceStub->method("searchBreedsByExperimental")->willReturn(["bar"]);
		$this->assertEquals($expected, $catBreedsServiceStub->searchBreedsByExperimental($entry));
	}

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testSearchBreedByID($entry, $expected){
		//Create stub gor the CatBreedsService class
		$catBreedsServiceStub = $this->createMock(CatBreedsService::class);
		$catBreedsServiceStub->method("searchBreedByID")->willReturn(["bar"]);
		$this->assertEquals($expected, $catBreedsServiceStub->searchBreedByID($entry));
	}

	public function catBreedDataObjectProvider(){
		return [
			["1", ["bar"]],
		];
	}
}
