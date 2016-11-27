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

Route::get('/contacto', function() {
	return view('contacto');
})->name('contacto');

Route::get('/home', 'HomeController@index');



Route::post('filtro', [
		'uses' 	=> 'PropiedadController@filtros',
		'as'	=> 'filtros',
		'middleware'=>'auth'
]);

Route::group(['prefix'=> 'admin'],function(){
	Route::resource('user','UserControl');


	Route::get('user/{id}/destroy',[
		'uses'=>'UserControl@destroy',
		'as'=> 'admin.user.destroy'
	]);
});


Route::resource('propiedades', 'PropiedadController');

Route::get('propiedades/{id}/destroy', [
	'uses' 	=> 'PropiedadController@destroy',
	'as'	=> 'propiedades.destroy'
]);

Route::get('propiedades/{id}/send', [
	'uses' 	=> 'PropiedadController@send',
	'as'	=> 'propiedades.send'
]);

Route::resource('comentarios', 'ComentarioController');

Route::resource('mail', 'MailController');

Auth::routes();

