<?php

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

$router->get('/', function() use ($router) {
    $res['success'] = true;
    $res['result'] = "Welcome to jojo-flight-api";
    return response()->json($res);
});

$router->post('/login', 'LoginController@index');
$router->post('/register', 'UserController@register');
$router->get('/user/{id}', ['middleware' => 'auth', 'uses' => 'LoginController@index']);

$router->get('/flights', 'FlightController@index');
$router->post('/flights/create', 'FlightController@create');
$router->get('/flights/filter', 'FlightController@search');
$router->get('/flights/{id}', 'FlightController@read');

$router->get('/airlines', 'AirlineController@index');
$router->post('/airlines/create', 'AirlineController@create');
$router->get('/airlines/{id}', 'AirlineController@read');
$router->post('/airlines/update/{id}', 'AirlineController@update');
$router->delete('/airlines/delete/{id}', 'AirlineController@delete');