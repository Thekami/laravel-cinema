<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('controlador', 'PruebaController@index');
Route::get('nombre/{nombre}', 'PruebaController@nombre');

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function(){
	return "Hola Mundo!";
});


// Route::get('nombre/{nombre}', function($nombre){
// 	 return "Mi nombre es {$nombre}";
// });


// Controlador RESTFULL
Route::resource('movie', 'Movie');