# CAT BREEDS
###### A HostGator code challenge

When I received this test, I was very happy to have the chance to work at a large company like HostGator. As soon as possible, I began to study the requirements and improve my knowledge to apply quickly. My first step was to write good documentation, then plan the goals and finally plan an architecture that approach the challenge requirements to my knowledge to optimize the results.

When I was planning the test application I think that may use complete frameworks, but in my concept the test is for the avaliators check my knowledge and abillities
so I decided to use minimal packages to use and apply a many things that I learn in my career.

This challenge API can be tested at [here]() (the API docs follow in this document above).

### The Challenge

Create a WEB API that consult the [Cat API](https://docs.thecatapi.com/) and show to the Client a Cat Breeds list with a query by name and cache the Cat API results in a MySQL database.


### Installation

For install the project you just need clone this repository at master.

Using https:

```sh
$ git clone https://github.com/raulinoneto/cat-breeds.git cat-breeds
```

or using ssh:

```sh
$ git clone git@github.com:raulinoneto/cat-breeds.git cat-breeds
```

If you wants you can download the zip file with the code [here](https://github.com/raulinoneto/cat-breeds/archive/develop.zip).

For run locally the application you must have ``composer`` installed (can you see [here](https://getcomposer.org/))

Them install the dependencies with composer and load classes like psr-4:

```sh
$ composer install
$ composer dump-autoload
```

Copy ``.env.example`` to ``.env``  and configure the database credential them migrate the tables:

```sh
$ composer migrate
```

Finnaly you can run the application:

```sh
$ composer serve
```

**Greats! The app is running**

### Tests

Run the tests using follow command:

```sh
$ composer test
```

## Goals

- [x] Plan an architecture.
- [x] Plan the database structure.
- [x] Select composer Packages and Libraries necessary for the project.
- [x] Build a bootstrap application.
- [x] Build tests with all cases possibles.
- [x] Build Mock Objects for the tests.
- [x] Build necessary helpers and components.
- [x] Code the Model(s) and Migration(s).
- [x] Code necessary logical business.
- [ ] Test Models and logical business Classes.
- [ ] Fix the tests errors and test again.
- [x] Code the necessary entry endpoint(s).
- [x] Test all endpoints.
- [x] Fix the tests errors and test again.
- [ ] Optimize the code with best pratices.


## Archtecture

### FlowChart
The principal requirement of test is cache responses in MySQL database, in my knowledge the search cache store query and response for next searches. 
For best results I resolved to store every object in the query at a database tuple, case the client want to do a new search that doesn't exists in cache.
So in this flow we can se the plan to cover this objective:
![](architecture/simplequeryflowchart.png?raw=true)

### Source Tree

The project organization is like a MVC archtecture, using layers to separate responsabilites and approaching at SOLID pratices. 
Above has a source tree of the project and a little explaination about some archieves:

```
.
├── app
│   ├── Controllers
│   │   ├── BaseController.php					// Base to all controllers for use some requirements
│   │   └── BreedsController.php				// Controller with breed endpoints
│   ├── Helpers
│   │   └── ConnectionHelper.php				// Helper to know if the database is connected with only one try
│   ├── Migrations
│   │   ├── 20190508010636_query_cache_migration.php		// Migration to create query_cache table, here will be stored all external search
│   │   └── 20190508010704_cat_breeds_migration.php		// Migration to create cat_breed table, here will be stored all breeds found at api
│   ├── Models
│   │   ├── CatBreeds.php					// Eloquent based model for CatBreed database queries
│   │   └── QueryCache.php					// Eloquent based model for QueryCache database queries
│   └── Services
│       ├── DatabaseServices
│       │   └── EloquentServiceProvider.php			// Provider to application load the Eloquent 
│       ├── LogicalBusinessServices
│       │   ├── CatBreedsFactoryService.php			// Factory to create Breeds found and save all queries
│       │   └── CatBreedsService.php				// All logical business explained at flowchart
│       └── TheCatAPIServices
│           ├── BreedsService.php				// Class to make external searchs at The Cat API
│           └── TheCatAPIService.php				// The Cat API bases, has to be extended case want others queries
├── architecture
│   ├── flowchart.png						// First flow version
│   └── simplequeryflowchart.png				// Last flow version
├── composer.json				
├── composer.lock
├── config
│   ├── config.php						// All application bases configurations
│   ├── dependencies.php					// Load application dependences for Slim
│   └── routes.php						// Routes and endpoints
├── logs
├── phinx.php							// Migrations configurations
├── .env.example						// Example of evoirements variables
├── phpunit.xml							// Unit tests configuration
├── public
│   └── index.php						// Application Bootstrap
├── README.md
├── tests
│   └── CatBreedsSearchTest.php					// Testing logical business
└── vendor
```

## About the code

Writing

### Packages
 

Above follow the package list used in composer and why I used it them:

* [slim/slim]() - Slim is a microframework minimal, basic and optimized for HTTP requests, I choice because is lightweight, has a good documentation and it's easy to implement.
* [monolog/monolog]() - Use for Slim Logs, indicated by documentation.
* [illuminate/database]() - Illuminate is an Active Record ORM used in [Laravel]() framework, isn't verbose and is so easy to use, only extending model you have an object like a database table.
* [vlucas/phpdotenv]() - Use for load the envoirements variables configured at ``.env`` archieve.
* [curl/curl]() - Use for abstract ``curl`` php library, it's easy to use and the code aren't verbose.
* [robmorgan/phinx]() - Phinx is a migration package used in [CakePHP]() framework, in my concept there must be a migration tool in every project.

and development dependencies:

* [phpunit/phpunit]() - Standard unit test PHP tool.

### Security


## The API Documentation

### Endpoints Docs

To see the endpoints usage docs click [here](docs/EndpointsIndex.md)

### Source Code API Docs

To see the source code docs click [here](docs/api/ApiIndex.md)

## Conclusion

Special thanks and others

## License

This repository has no registered license, but feel free to clone and use it (only if you don't are doing the HostGator test, LOL!).
