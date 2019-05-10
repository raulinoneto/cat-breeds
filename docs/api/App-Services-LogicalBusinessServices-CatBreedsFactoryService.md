App\Services\LogicalBusinessServices\CatBreedsFactoryService
===============






* Class name: CatBreedsFactoryService
* Namespace: App\Services\LogicalBusinessServices







Methods
-------


### saveBreeds

    mixed App\Services\LogicalBusinessServices\CatBreedsFactoryService::saveBreeds(string $query, array $breeds)

Send breeds to save in correct place



* Visibility: **public**
* This method is **static**.


#### Arguments
* $query **string** - &lt;p&gt;query&lt;/p&gt;
* $breeds **array** - &lt;p&gt;breeds&lt;/p&gt;



### saveCache

    mixed App\Services\LogicalBusinessServices\CatBreedsFactoryService::saveCache(string $query, array $breeds)

Save cache query in database to future querys



* Visibility: **private**
* This method is **static**.


#### Arguments
* $query **string** - &lt;p&gt;query&lt;/p&gt;
* $breeds **array** - &lt;p&gt;breeds&lt;/p&gt;



### saveBreedsInDB

    mixed App\Services\LogicalBusinessServices\CatBreedsFactoryService::saveBreedsInDB(array $breeds)

Save all searched breeds in database



* Visibility: **private**
* This method is **static**.


#### Arguments
* $breeds **array** - &lt;p&gt;breeds&lt;/p&gt;


