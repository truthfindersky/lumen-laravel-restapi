#lumen

composer create-project --prefer-dist laravel/lumen blog
php -S localhost:8000 -t public
http://localhost:8000/

#Lumen Generator	
https://github.com/flipboxstudio/lumen-generator

composer require flipbox/lumen-generator

bootstrap/app.php
$app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);

php artisan key:generate
php artisan make:cast classname            Create a new custom Eloquent cast class
php artisan make:channel classname         Create a new channel class
php artisan make:command classname         Create a new Artisan command
php artisan make:controller classname      Create a new controller class
php artisan make:event classname           Create a new event class
php artisan make:exception classname       Create a new custom exception class
php artisan make:factory classname         Create a new model factory
php artisan make:job classname             Create a new job class
php artisan make:listener classname        Create a new event listener class
php artisan make:mail classname            Create a new email class
php artisan make:middleware classname      Create a new middleware class
php artisan make:migration classname       Create a new migration file
php artisan migrate
php artisan make:model classname           Create a new Eloquent model class
php artisan make:notification classname    Create a new notification class
php artisan make:observer classname        Create a new observer class
php artisan make:pipe classname            Create a new pipe class
php artisan make:policy classname          Create a new policy class
php artisan make:provider classname        Create a new service provider class
php artisan make:request classname         Create a new form request class
php artisan make:resource classname        Create a new resource
php artisan make:rule classname            Create a new rule
php artisan make:seeder classname          Create a new seeder class
php artisan make:test classname            Create a new test class
php artisan notifications:table classname  Create a migration for the notifications table
php artisan schema:dump                    Dump the given database schema
php artisan clear-compiled                 Remove the compiled class file
php artisan serve                          Serve the application on the PHP development server
php artisan tinker                         Interact with your application
php artisan optimize                       Optimize the framework for better performance
php artisan route:list                     Display all registered routes.

#REST API - Representational State Transfer | Application Programming Interface

Roy Fielding, 2000

Client script (Desktop, mobile, web, IOT Devices) <-> API Script <-> Database/server

stateless - api doesn't store data in session or cookies
cachable - rest api doesn't cache anything inside it
uniform interface - from one url, several methods (get, post, put, delete... ) can be operated

#API Response

Response area:
body - normal data 
header - secure data (access token, auth, username, pass ...) 

Response type:
simple string
json
download
redirect
xml

#way of send and catch (use)

params: key and value
header: key and value
body: raw json data

{
    "name": "moana",
    "roll": 1
}

#API Documentation

Redoc UI Interface 
Swagger UI Interface
Laravel API doc generator 

API Version, name, description
post/get/put/delete api endpoint
req params/body/header
response type - array/string/json
data model - setter, getter etc

https://packagist.org/
https://packagist.org/packages/noitran/opendox
provide both redoc and swagger ui

composer require noitran/opendox

bootstrap/app.php
$app->register(Noitran\Opendox\ServiceProvider::class);
$app->configure('opendox');

api-docs.yml

php artisan opendox:transform
public/api-docs/api-docs.json

http://localhost:8000/api/documentation
http://localhost:8000/api/console

#db connection
.env
bootstrap/app.php
$app->withFacades();
$app->withEloquent();

#Basic CURD Operation

[
    {
        "name": "Laz",
        "roll": "3",
        "city": "Dhaka",
        "phone": "01718303132",
        "class": "B"
    },
    {
        "name": "Arin",
        "roll": "4",
        "city": "Khulna",
        "phone": "01718301010",
        "class": "B"
    }
]


#Authentication

#bootstrap/app.php

$app->routeMiddleware([
    'auth' => App\Http\Middleware\Authenticate::class,
]);

$app->register(App\Providers\AuthServiceProvider::class);

app/Providers/AuthServiceProvider.php
app/Http/Middleware/Authenticate.php

#JWT (Json Web Token)
https://jwt.io/
https://jwt.io/libraries?language=PHP

https://github.com/firebase/php-jwt
composer require firebase/php-jwt