<?php



Auth::routes();
Route::get('/', function () {  return view('welcome');})->name('inicio');

//==========================panel de administracion========================================================
Route::group(['prefix'=>'admin', 'middleware'=>'auth_user'],function(){
    Route::get('/','AppController@index');
<<<<<<< HEAD
    Route::resource('paquete','PaqueteController'); 
    Route::resource('/usuario','UsuarioController'); 
=======
    Route::resource('paquete','PaqueteController');
    Route::resource('servicio','ServicioController');
    Route::get('buscar_servicio','DetalleServicioController@buscar')->name('buscar_servicio');
    Route::resource('detalle_servicio','DetalleServicioController');
>>>>>>> 311d49343738664322f22990f67cd3f3ae4909c2
});


//============================================================================================================


Route::resource('/lineas', 'LineaController');

Route::view('/superlinea', 'linea.super')->name('superlinea');
Route::view('/playandina','linea.playa')->name('playandina');
Route::view('/somos','somos')->name('somos');
Route::view('/termal','linea.termal')->name('termal');
Route::view('/establecimientos','establecimientos.index')->name('establecimientos');
Route::view('/tunjahistorica','linea.tunjah')->name('tunjahistorica');
Route::view('/navidad','linea.navidad')->name('navidad');
Route::view('/cocuy','linea.cocuy')->name('cocuy');
Route::view('/norteg','linea.norteg')->name('norteg');