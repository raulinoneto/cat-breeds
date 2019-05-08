<?php
use PHPUnit\Framework\TestCase;
use App\Services\TheCatAPIConnectorService;
use App\Models\QueryCache;
use App\Models\CatBreeds;

class CatBreedsSearchTest extends TestCase {

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testTheCatAPISearch($entry, $expected){
		//Create stub gor the TheCatAPIConnectorService class
		$catAPISearchStub = $this->createMock(TheCatAPIConnectorService::class);
		$catAPISearchStub->method("search")->willReturn("bar");
		$this->assertEquals($catAPISearchStub->search($entry), $expected);
	}

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testLocalDatabaseByQueryCacheSearch($entry, $expected){
		$queryCache = new QueryCache();
		$this->assertEquals($queryCache->findOrFail(["query"=>$entry]), $expected);
	}

	/**
	* @dataProvider catBreedDataObjectProvider
	*/
	public function testLocalDatabaseByCatBreedsSearch($entry, $expected){
		$catBreeds = new CatBreeds();
		$this->assertEquals($catBreeds->findAll(["name"=>$entry]), $expected);
	}


	public function catBreedDataObjectProvider(){
		return [
			["foo", "bar"],
		];
	}
}
