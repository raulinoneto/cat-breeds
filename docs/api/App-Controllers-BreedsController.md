App\Controllers\BreedsController
===============






* Class name: BreedsController
* Namespace: App\Controllers
* Parent class: [App\Controllers\BaseController](App-Controllers-BaseController.md)





Properties
----------


### $container

    protected \App\Controllers\Interop\Container\ContainerInterface $container

Container configurations



* Visibility: **protected**


Methods
-------


### search

    \Slim\Http\Response App\Controllers\BreedsController::search(\Slim\Http\Request $request, \Slim\Http\Response $response, array $args)

Search Breeds by name or by experimental indexes



* Visibility: **public**


#### Arguments
* $request **Slim\Http\Request**
* $response **Slim\Http\Response**
* $args **array**



### show

    \Slim\Http\Response App\Controllers\BreedsController::show(\Slim\Http\Request $request, \Slim\Http\Response $response, array $args)

Return a single Breed to get breed endpoint



* Visibility: **public**


#### Arguments
* $request **Slim\Http\Request**
* $response **Slim\Http\Response**
* $args **array**



### __construct

    mixed App\Controllers\BaseController::__construct(\Interop\Container\ContainerInterface $container)





* Visibility: **public**
* This method is defined by [App\Controllers\BaseController](App-Controllers-BaseController.md)


#### Arguments
* $container **Interop\Container\ContainerInterface**


