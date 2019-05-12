# CAT BREEDS
###### A HostGator code challenge

When I received this test, I was very happy to have the chance to work at a large company like HostGator. As soon as I could, I started studying the Challenge’s requirements and to improve my knowledge so I could apply quickly. The first step was writing a good documentation, the second was planning the goals and the last one was to conceive an architecture that enhance the results by matching my knowledge with the Challenge’s requirements.

When I was planning the test application I thought that I could use complete frameworks like Laravel, Yii2, CakePHP, among others. However, in my understanding, the test consists on an evaluative process to measure the depth of my knowledge and abilities. Therefore, I set forth the many things I have learned in my career by using minimal packages.

### The Challenge

Create a WEB API that consult the [Cat API](https://docs.thecatapi.com/) and show to the Client a Cat Breeds list with a query by name and cache the Cat API results in a MySQL database.

### System Requirements

* PHP 7+
* Composer
* MySQL 5.6+

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

For run locally the application you must have ``composer`` installed (you can see [here](https://getcomposer.org/)).

Them install the dependencies with composer and load classes like psr-4:

```sh
$ composer install
$ composer dump-autoload
```

Copy ``.env.example`` to ``.env``  and configure the database credential then migrate the tables:

```sh
$ composer migrate
```

Finnaly you can run the application:

```sh
$ composer serve
```

**Greats! The app is running**

### Tests

Run the tests using the command bellow:

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
- [x] Test Models and logical business Classes.
- [x] Fix the tests errors and test it again.
- [x] Code the necessary entry endpoint(s).
- [x] Test all endpoints.
- [x] Fix the tests errors and test it again.
- [x] Optimize the code with the best pratices.


## Archtecture

### FlowChart
The main requirement of the test is cache responses in MySQL database. In my understanding, the search cache stores queries and responses for the next searches. For best results I decided to store every object in the query at a database tuple, in case the client want to do a new search that doesn't exists in cache. So, in the Flow Chart below, we can see the developed plan to achieve this goal:

![](architecture/simplequeryflowchart.png?raw=true)

### Source Tree

The project scope is like a MVC architecture, using layers to separate responsibilities and approaching SOLID practices. Below, there is a source tree of the project and a little explanation about some archives:

```
.
├── app
│   ├── Controllers
│   │   ├── BaseController.php					// Base for all controllers for use some requirements
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
├── phpunit.xml						// Unit tests configuration
├── public
│   └── index.php						// Application Bootstrap
├── README.md
├── tests
│   └── CatBreedsSearchTest.php				// Testing logical business
└── vendor
```

### Packages
 

Below it is the package list used in composer and why I used them:

* [slim/slim](http://www.slimframework.com/) - Slim is a microframework minimal, basic and optimized for HTTP requests, I chose it because is lightweight, has a good documentation and it's easy to implement.
* [monolog/monolog](https://github.com/Seldaek/monolog) - Use for Slim Logs, indicated by documentation.
* [illuminate/database](https://github.com/illuminate/database) - Illuminate is an Active Record ORM used in [Laravel](https://laravel.com/) framework, isn't verbose and is so easy to use, only extending model obtain an object like a database table.
* [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv) - Used to load the envoirements variables configured at ``.env`` archieve.
* [curl/curl](https://github.com/php-mod/curl) - Use for abstract ``curl`` php library, it is easy to use and the code is not verbose.
* [robmorgan/phinx](https://phinx.org/) - Phinx is a migration package used in [CakePHP](https://cakephp.org/) framework, in my conception, there must be a migration tool in every project.

and development dependencies:

* [phpunit/phpunit](https://phpunit.de/) - Standard unit test PHP tool.

### Security

* SQL Injection - Laravel’s Eloquent ORM uses PDO binding that protects from SQL injections. This feature ensures that no client could modify the intent of the SQL queries.

## The API Documentation

### Endpoints Docs

To see the endpoints usage docs click [here](docs/EndpointsIndex.md).

### Source Code API Docs

To see the source code docs click [here](docs/api/ApiIndex.md).

## Conclusion

This test was great to improve my knowledge and abilities, I was comfort with the deadline given and I enjoyed it the maximum I could to prove my skills. I'm grateful for HostGator for this opportunity to show what I can do.

## License

This repository has no registered license, but feel free to clone and use it (only if you aren’t doing the HostGator test, LOL!).
