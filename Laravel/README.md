# Laravel

A repository with small projects used to learn new libraries and frameworks. This will be continously updated as I progress and learn more. The main focus will be on front end web development, creating APIs, designing databases, and creating mobile applications.

The goal of this project is to practice and learn new libraries, frameworks and languages, while challenging myself to create easy to read and understand documentation for use later.

---

## Getting started with Laravel

To get started with laravel using composer, you must ensure composer if it is you can download laravel by requiring it globally with composer, then create a new project with composer create-project.

```console
foo@bar:~$ composer global require laravel/installer
foo@bar:~$ composer create-project --prefer-dist laravel/laravel projectName
```

To start a local development server to view the application, you can use the command

```console
foo@bar:~$ php artisan serve
```

## Useful Laravel commands

```console
foo@bar:~$ php artisan make:controller ExampleController
foo@bar:~$ php artisan make:model Photo
foo@bar:~$ php artisan make:migration create_projects_table
foo@bar:~$ php artisan make:middleware CheckAge
foo@bar:~$ php artisan make:auth 
foo@bar:~$ php artisan make:test ExampleTest 
```

## Examples of laravel

Here are some examples of projects I have made with laravel:

* [Laravel Dashboard](https://github.com/CMHayden/Laravel-Dashboard)

* [Add product page](https://github.com/CMHayden/management.products.addProduct)

* [Basic passport authentication](https://github.com/CMHayden/laravel-authentication)

* [Products management api - sms subscriber](https://github.com/CMHayden/management.products.api.subscriber.sms)

* [Products management api - email subscriber](https://github.com/CMHayden/management.products.api.subscriber.email)
