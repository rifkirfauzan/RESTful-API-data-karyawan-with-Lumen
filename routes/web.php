<?php

use Illuminate\Support\Str;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


//Login, Register, Middleware
$router->post("/register", "AuthController@register");
$router->post("/login", "AuthController@login");
//Middleware
$router->get("/user", "UserController@index");


//CRUD
$router->get('karyawan/get', 'KaryawanController@get');
$router->post('karyawan/add', 'KaryawanController@add');
$router->put('karyawan/update/{id}', 'KaryawanController@update');
$router->delete('karyawan/delete/{id}', 'KaryawanController@delete');



