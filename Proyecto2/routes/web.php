<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::group(['prefix'=> 'admin'],function(){
	Route::resource('user','UserControl');


	Route::get('user/{id}/destroy',[
		'uses'=>'UserControl@destroy',
		'as'=> 'admin.user.destroy'
	]);
});

/*Route::group(['prefix'=> 'terreno','middleware'=>'auth'],function(){
	Route::resource('CRUD','TerrenoController');
});


Route::group(['prefix' => 'terrenos'], function(){
	Route::resource('', 'TerrenoController');
	
	Route::get('view/{id}', [
		'uses' 	=> 'TerrenoController@view',
		'as'	=> 'terrenosView'
	]);

});*/


Route::resource('propiedades', 'PropiedadController');

Route::post('filtro', [
		'uses' 	=> 'PropiedadController@filtros',
		'as'	=> 'filtros',
		'middleware'=>'auth'
	]);

Route::get('propiedades/{id}/destroy', [
	'uses' 	=> 'PropiedadController@destroy',
	'as'	=> 'propiedades.destroy'
]);
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('comentarios', 'ComentarioController');