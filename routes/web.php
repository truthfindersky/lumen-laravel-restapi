<?php

/** @var \Laravel\Lumen\Routing\Router $router */

//1. Lumen API Basic Routing | Test in POSTMAN

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/get', function () use ($router) {
    return "Im get";
});
$router->post('/post', function () use ($router) {
    return "Im post";
});
$router->put('/put', function () use ($router) {
    return "Im put";
});
$router->delete('/delete', function () use ($router) {
    return "Im delete";
});



//2. Route Prameter, you can pass two types of parameter through route
//2.1. Required Parameter
//http://localhost:8000/moana/
$router->post('/name/{value}',function($value){
    return $value;
});
//http://localhost:8000/moana/age/3
$router->post('/name/{namevalue}/age/{agevalue}',function($namevalue,$agevalue){
    return $namevalue.$agevalue;
});
//2.2 Optional Parameter
//http://localhost:8000/moana/3
//http://localhost:8000/moana/3/khulna
$router->post('{name}/{age}[/{city}]',function($name,$age,$city=null){
    return $name.$age.$city;
});



//3. Laravel Lumen API Controller	
$router->get('/my', 'MyController@My');
$router->get('/myname/{name}/myage/{age}', 'MyController@MyNameAge');


//4. API Response - Simple String Response through header and body
$router->get('/xyz/{name}', 'ResponseController@MyBody');
$router->get('/header/{name}', 'ResponseController@MyHeader');
$router->get('/many/{name}', 'ResponseController@ManyHeaderResponse');



//5. JSON Response
$router->get('/array', 'JsonResponseController@SimpleArray');
$router->get('/associativearray', 'JsonResponseController@AssociativeArray');
$router->get('/multidimensionalarray', 'JsonResponseController@MultidimensionalArray');



//6. Redirect And Download - when user will select first method, auto redirect to second method
$router->get('/first', 'RedirectController@First');
$router->get('/second', 'RedirectController@Second');
$router->get('/download', 'RedirectController@Download');



//7. Send and Catch
$router->post('/catch', 'RequestController@Catch');
$router->post('/catchviaheader', 'RequestController@CatchViaHeader');


//8. API Documentation


//9. db connection check
$router->get('/testconn', 'DatabaseController@testConn');
$router->get('/selectall', 'DatabaseController@SelectAll');


//10. Basic CURD Operation
$router->get('/curd', 'BasicCurdController@Select');
$router->post('/curd', 'BasicCurdController@Create');
$router->delete('/curd', 'BasicCurdController@Delete');
$router->put('/curd', 'BasicCurdController@Update');


//11. Laravel Query Builder
$router->get('/builder', 'BuilderController@AllRows');
$router->get('/singlerow', 'BuilderController@SingleRow');
$router->get('/singlerowfirst', 'BuilderController@SingleRowFirst');
$router->get('/find', 'BuilderController@Find');
$router->get('/column', 'BuilderController@Column');
$router->get('/multicolumn', 'BuilderController@MultiColumn');
$router->get('/countrow', 'BuilderController@CountRow');
$router->get('/maxfromrow', 'BuilderController@MaxFromRow');
$router->get('/minfromrow', 'BuilderController@MinFromRow');
$router->get('/avgfromrow', 'BuilderController@AvgFromRow');
$router->get('/summationfromrow', 'BuilderController@SummationFromRow');
$router->post('/query', 'BuilderController@Insert');
$router->put('/query', 'BuilderController@Update');
$router->delete('/query', 'BuilderController@Delete');


//12. Model and Controller
$router->get('/mselectall', 'LumenController@SelectAll');
$router->get('/mselectall', 'LumenController@SelectByID');
$router->get('/count', 'LumenController@Count');
$router->get('/min', 'LumenController@Min');
$router->get('/max', 'LumenController@Max');
$router->get('/avg', 'LumenController@Avg');
$router->get('/sum', 'LumenController@Sum');
$router->post('/model', 'LumenController@Insert');
$router->delete('/model', 'LumenController@Delete');
$router->put('/model', 'LumenController@Update');


//13. Database Migration	
//php artisan make:migration users
//php artisan migrate


//14. Authentication //header: access_token 1234
$router->get('/auth', ['middleware'=>'auth', 'uses'=>'AuthenticateController@Select']);

//15. jwt
$router->get('/authselectbyid', ['middleware'=>'auth', 'uses'=>'AuthenticateController@SelectByID']);
