App\Services\LogicalBusinessServices\CatBreedsService
===============






* Class name: CatBreedsService
* Namespace: App\Services\LogicalBusinessServices





Properties
----------


### $theCatApi

    private mixed $theCatApi





* Visibility: **private**


### $hasDBConnection

    private mixed $hasDBConnection





* Visibility: **private**


### $hasError

    public mixed $hasError





* Visibility: **public**


### $apiKey

    public mixed $apiKey





* Visibility: **public**


### $apiUrl

    public mixed $apiUrl





* Visibility: **public**


Methods
-------


### __construct

    mixed App\Services\LogicalBusinessServices\CatBreedsService::__construct(\App\Services\LogicalBusinessServices\theCatApi $db, \App\Services\LogicalBusinessServices\db $apiKey, \App\Services\LogicalBusinessServices\string $apiUrl)





* Visibility: **public**


#### Arguments
* $db **App\Services\LogicalBusinessServices\theCatApi**
* $apiKey **App\Services\LogicalBusinessServices\db**
* $apiUrl **App\Services\LogicalBusinessServices\string**



### searchBreedsApi

    array App\Services\LogicalBusinessServices\CatBreedsService::searchBreedsApi(string $query)

Search in the cat api breeds with name like provided query



* Visibility: **private**


#### Arguments
* $query **string** - &lt;p&gt;query&lt;/p&gt;



### buildDBErrorMessage

    array App\Services\LogicalBusinessServices\CatBreedsService::buildDBErrorMessage()

Build error when has no database connection



* Visibility: **private**




### searchBreedsByName

    array App\Services\LogicalBusinessServices\CatBreedsService::searchBreedsByName(string $query)

Search cat breeds by name provided in query



* Visibility: **public**


#### Arguments
* $query **string** - &lt;p&gt;query&lt;/p&gt;



### searchBreedsByExperimental

    array App\Services\LogicalBusinessServices\CatBreedsService::searchBreedsByExperimental(string $query)

Search cat breeds by experimental key provided in query



* Visibility: **public**


#### Arguments
* $query **string** - &lt;p&gt;query&lt;/p&gt;



### searchBreedByID

    array App\Services\LogicalBusinessServices\CatBreedsService::searchBreedByID(string $id)

Search cat breed by ID key provided in query



* Visibility: **public**


#### Arguments
* $id **string** - &lt;p&gt;query&lt;/p&gt;


