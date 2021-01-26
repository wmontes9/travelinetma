<?php



Auth::routes();
//Route::get('/', function () {  return view('welcome');})->name('inicio');

//==========================panel de administracion========================================================
//Route::group(['prefix'=>'admin'],function(){
Route::group(['prefix'=>'categoria'],function(){
    Route::get('{tipo}','TipoController@index');
});

<<<<<<< HEAD
Route::resource('detalle_compra','DetalleCompraController');
=======
>>>>>>> fd061cf184ee7acfe8a09e6dd461ad9a38541ba3

Route::group(['prefix'=>'admin', 'middleware'=>'auth_user'],function(){
    Route::get('/','AppController@index');

    Route::resource('linea','LineaController');
    Route::resource('paquete','PaqueteController'); 
    Route::resource('/tarifa','TarifaController');
    Route::resource('/tipo','TipoController');
    Route::resource('/usuario','UsuarioController'); 
    Route::resource('servicio','ServicioController');
    Route::get('buscar_servicio','DetalleServicioController@buscar')->name('buscar_servicio');
    Route::resource('detalle_servicio','DetalleServicioController');
    Route::resource('destino','DestinoController');
    Route::resource('imagen','ImagenController');
});


//=========================================== Sitio Web cliente =================================================================
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

