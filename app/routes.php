<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getIndex');
Route::get('/resultados/{type}/{operation}/{state}/{city?}/{colony?}', 'ResultadosController@getResults');

/*api routes*/
Route::group(array('prefix' => 'api/v1'), function()
{

	/*Properties*/	
	Route::resource('propiedad', 'PropiedadController');
    Route::resource('estado', 'EstadoController');        
    Route::resource('propiedaddestacada', 'PropiedadDestacadaController');

	Route::get('propiedades/search/{page}/{type}/{operation}/{state}/{city?}/{colony?}', 'PropiedadController@getSearch');
    Route::get('big', 'PropiedadDestacadaController@getBig');
    Route::get('search/{stateid}/{term}', 'SepomexController@getSearch');
});