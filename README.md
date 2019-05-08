# CAT BREEDS
###### A HostGator code challenge

When I received this test, I was very happy to have the chance to work at a large company like HostGator. As soon as possible, I began to study the requirements and improve my knowledge to apply quickly. My first steps was to write good documentation, plan the goals and plan an architecture that approach the challenge requirements to my knowledge to optimize the results.

This challenge API can be tested at [here]() (the API docs follow in this document above).

### The Challenge

Create a WEB API that consult the [Cat API](https://docs.thecatapi.com/) and show to the Client a Cat Breeds list with a query by name and cache the Cat API results in a MySQL database. The app have to be able to offer:
* Show the upcoming Movies not limited to only 20 that TMDb API offer
* Show details of a chosen movie
* Find a movie with a partial or full text offered by the client

## Goals

- [x] Plan an architecture.
- [ ] Plan the database structure.
- [x] Select composer Packages and Libraries necessary for the project.
- [ ] Build a bootstrap application.
- [ ] Build tests with all cases possibles.
- [ ] Build Mock Objects for the tests.
- [ ] Build necessary helpers and components.
- [ ] Code the Model(s) and Migration(s).
- [ ] Code necessary logical business.
- [ ] Test Models and logical business Classes.
- [ ] Fix the tests errors and test again.
- [ ] Code the necessary entry endpoint(s).
- [ ] Test all endpoints.
- [ ] Fix the tests errors and test again.


## About the code

Writing

 ### The Backend
 

Above follow the package list used in composer and why I used it them:

* [package/name]() - .

#### Source tree and quick explanation

```
.
├── app
│   ├── controllers
│   ├── models
│   ├── migrations
│   └── services
│ 	├── archive
│       └── archive
├── phinx.example.yaml ## Example of database configuration for migations remove ".example" and modify it
├── composer.json ## Composer Packages (using psr-4 to help namespaces usage)
├── composer.lock
├── config
│   ├── app.php ## All tasks necessary to application operation
│   └── config.php ## Configurations to application operation
├── public
│   └── index.php ## Runs the application
└── vendor
```
#### Installation and deploy

For run locally the application you must have ``composer`` installed (can you see [here](https://getcomposer.org/)) and follow these commands:

```sh
$ cd backend
$ composer install
$ composer dump-autoload --optimize
$ composer serve
```

For deploy application I use the [Google App Engine](https://cloud.google.com/appengine/?hl=en-us) can you install the [Google Cloud SDK](https://cloud.google.com/sdk/), after you configure your Google Cloud Account and run these commands:

```sh
$ cd backend
$ gcloud app deploy
$ gcloud app browse
```

**Greats! The app is running**

## The API Documentation

How to use the endpoints.

## Conclusion

Special thanks and others

## License

about license
