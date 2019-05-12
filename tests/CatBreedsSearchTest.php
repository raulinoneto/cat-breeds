<?php
use PHPUnit\Framework\TestCase;
use App\Services\LogicalBusinessServices\CatBreedsService;
use App\Models\QueryCache;
use App\Models\CatBreeds;
use Illuminate\Database\Capsule\Manager;

class CatBreedsSearchTest extends TestCase {

	/**
	* @dataProvider catBreedArrayDataObjectProvider
	*/
	public function testSearchBreedsByName($entry, $expected){
		//Create instance for the CatBreedsService class
		$catBreedsService = $this->getCatBreedsServiceInstance();
		
		$this->assertEquals($expected, $catBreedsService->searchBreedsByName($entry));
	}


	public function catBreedArrayDataObjectProvider(){

		$str = file_get_contents(__DIR__.'/dataProvider/data.json');
		$data = json_decode($str, true);
		
		return [
			["sib", $data],
		];
	}

	private function getCatBreedsServiceInstance() {

		$container = require __DIR__.'/../config/config.php';
		$capsule = new Manager();
		$capsule->addConnection($container['settings']['database']);
		// Make this Capsule instance available globally via static methods.
		$capsule->setAsGlobal();
		// Setup the Eloquent ORM.
		$capsule->bootEloquent();

		return new CatBreedsService(
					$capsule, 
					$container['settings']['thecatapi']['apiKey'], 
					$container['settings']['thecatapi']['apiUrl']
		);
	}
}
