App\Services\TheCatAPIServices\TheCatAPIService
===============

Class to connect and do requests for The Cat API




* Class name: TheCatAPIService
* Namespace: App\Services\TheCatAPIServices





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


### __construct

    mixed App\Services\TheCatAPIServices\TheCatAPIService::__construct(string $apiKey, string $apiUrl)

Contructor method make bases for any request;



* Visibility: **public**


#### Arguments
* $apiKey **string** - &lt;p&gt;apiKey&lt;/p&gt;
* $apiUrl **string** - &lt;p&gt;apiUrl&lt;/p&gt;



### init

    mixed App\Services\TheCatAPIServices\TheCatAPIService::init()

Initialize the curl and set the authentication header



* Visibility: **protected**



