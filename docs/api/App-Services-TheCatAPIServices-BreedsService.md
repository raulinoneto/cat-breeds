App\Services\TheCatAPIServices\BreedsService
===============

Class to requests in The Cat API Breeds
Documentation at https://docs.thecatapi.com/api-reference/breeds




* Class name: BreedsService
* Namespace: App\Services\TheCatAPIServices
* Parent class: [App\Services\TheCatAPIServices\TheCatAPIService](App-Services-TheCatAPIServices-TheCatAPIService.md)





Properties
----------


### $curl

    protected \Curl\Curl\Curl $curl

Curl object to do requests



* Visibility: **protected**


### $apiUrl

    protected string $apiUrl

Url for request



* Visibility: **protected**


### $apiKey

    protected string $apiKey

API Key for authentication



* Visibility: **protected**


### $error

    public boolean $error

Boolean to check if the request has any error



* Visibility: **public**


Methods
-------


### searchCatBreeds

    mixed App\Services\TheCatAPIServices\BreedsService::searchCatBreeds(string $query)

Search cat breeds by any string, filtering by name



* Visibility: **public**


#### Arguments
* $query **string** - &lt;p&gt;query&lt;/p&gt;



### __construct

    mixed App\Services\TheCatAPIServices\TheCatAPIService::__construct(string $apiKey, string $apiUrl)

Contructor method make bases for any request;



* Visibility: **public**
* This method is defined by [App\Services\TheCatAPIServices\TheCatAPIService](App-Services-TheCatAPIServices-TheCatAPIService.md)


#### Arguments
* $apiKey **string** - &lt;p&gt;apiKey&lt;/p&gt;
* $apiUrl **string** - &lt;p&gt;apiUrl&lt;/p&gt;



### init

    mixed App\Services\TheCatAPIServices\TheCatAPIService::init()

Initialize the curl and set the authentication header



* Visibility: **protected**
* This method is defined by [App\Services\TheCatAPIServices\TheCatAPIService](App-Services-TheCatAPIServices-TheCatAPIService.md)



