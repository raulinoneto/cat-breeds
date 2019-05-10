# CAT BREEDS
###### A HostGator code challenge

When I received this test, I was very happy to have the chance to work at a large company like HostGator. As soon as possible, I began to study the requirements and improve my knowledge to apply quickly. My first steps was to write good documentation, plan the goals and plan an architecture that approach the challenge requirements to my knowledge to optimize the results.

This challenge API can be tested at [here]() (the API docs follow in this document above).

### The Challenge

Create a WEB API that consult the [Cat API](https://docs.thecatapi.com/) and show to the Client a Cat Breeds list with a query by name and cache the Cat API results in a MySQL database.

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
- [ ] Test all endpoints.
- [ ] Fix the tests errors and test again.


## Archtecture

### FlowChart
This is a basic flow that the system follows to response, all negative output are logged, but isn't in flow because was so much verbous.
![](architecture/simplequeryflowchart.png?raw=true)

### Source Tree

```
.
├── app
│   ├── Controllers
│   │   ├── BaseController.php
│   │   └── BreedsController.php
│   ├── Helpers
│   │   └── ConnectionHelper.php
│   ├── Migrations
│   │   ├── 20190508010636_query_cache_migration.php
│   │   └── 20190508010704_cat_breeds_migration.php
│   ├── Models
│   │   ├── CatBreeds.php
│   │   └── QueryCache.php
│   └── Services
│       ├── DatabaseServices
│       │   └── EloquentServiceProvider.php
│       ├── LogicalBusinessServices
│       │   ├── CatBreedsFactoryService.php
│       │   └── CatBreedsService.php
│       └── TheCatAPIServices
│           ├── BreedsService.php
│           └── TheCatAPIService.php
├── architecture
│   ├── flowchart.png
│   └── simplequeryflowchart.png
├── composer.json
├── composer.lock
├── config
│   ├── config.php
│   ├── dependencies.php
│   └── routes.php
├── logs
├── phinx.example.yml
├── .env.example
├── phpunit.xml
├── public
│   └── index.php
├── README.md
├── tests
│   └── CatBreedsSearchTest.php
└── vendor
```

## About the code

Writing

### The Backend
 

Above follow the package list used in composer and why I used it them:

* [slim/slim]() - .
* [monolog/monolog]() - .
* [illuminate/database]() - .
* [vlucas/phpdotenv]() - .
* [curl/curl]() - .
* [robmorgan/phinx]() - .

and development dependencies?

* [phpunit/phpunit]() - .
* [monolog/monolog]() - .
* [phpunit/php-invoker]() - 


### Installation and deploy

For run locally the application you must have ``composer`` installed (can you see [here](https://getcomposer.org/)) and follow these commands:

```sh
$ composer install
$ composer start
$ composer serve
```

**Greats! The app is running**

### Tests

Tests explanation

## The API Documentation

How to use the endpoints.

## Conclusion

Special thanks and others

## License

about license
