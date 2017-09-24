<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/inicio',function(){
	return view('inicio');
});*/

/* Route::get('routes', function() {
	header("Content-type: text/javascript");
	$routeCollection = Route::getRoutes();
	$routes_urls = [];
	echo gettype($routeCollection);
	foreach ($routeCollection as $key => $value) {
		// echo $key.'<br>';
		// var_dump($value);
		// echo '<hr>'; 
		
		$url = $value->uri;
		array_push($routes_urls, $url);
	}
	//return json_encode($routes_urls);
	return json_encode($routes_urls); 
}); */

Route::get('/item/routes','ItemController@routes')->name('item.routes');

Route::get('/inicio/{id?}','PruebaController@index');



Auth::routes();

Route::group(['middleware' => ['btnBackLogin','auth']], function () {

	Route::get('/home', 'HomeController@index')->name('home');
	
});

Route::group(['middleware' => ['auth']], function () {
	Route::resource('usuario','UsuarioController');
	Route::post('/usuario/showTable','UsuarioController@showTable')->name('usuario.showTable');

	Route::get('/estado/all','EstadoController@all')->name('estado.all');	
	Route::resource('estado','EstadoController');
	Route::post('/estado/showTable','EstadoController@showTable')->name('estado.showTable');
		

	Route::resource('rol','RolController');
	Route::post('/rol/showTable','RolController@showTable')->name('rol.showTable');

	
	Route::resource('item','ItemController');
	Route::post('/item/showTable','ItemController@showTable')->name('item.showTable');
});



