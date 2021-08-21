<?php



Auth::routes();
//Route::get('/', function () {  return view('welcome');})->name('inicio');
Route::resource('/catalogo','CatalogoController');
//==========================panel de administracion========================================================
//Route::group(['prefix'=>'admin'],function(){

Route::get('/config-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});


Route::group(['prefix'=>'categoria'],function(){
    Route::get('{tipo}','TipoController@index');
});


Route::resource('detalle_compra','DetalleCompraController');
Route::post('resultado_pago','DetalleCompraController@resultado_pago');

//=========================================== Sitio Web cliente =================================================================
Route::resource('/lineas', 'LineaController');

Route::resource('contacto','ContactoController');
Route::get('/establecimiento','EstablecimientoController@consultarestablecimientos');


Route::view('/superlinea', 'linea.super')->name('superlinea');
Route::view('/playandina','linea.playa')->name('playandina');
Route::view('/somos','somos')->name('somos');
Route::view('/termal','linea.termal')->name('termal');
Route::view('/establecimientos','establecimientos.index')->name('establecimientos');
Route::view('/tunjahistorica','linea.tunjah')->name('tunjahistorica');
Route::view('/navidad','linea.navidad')->name('navidad');
Route::view('/cocuy','linea.cocuy')->name('cocuy');
Route::view('/norteg','linea.norteg')->name('norteg');




Route::group(['prefix'=>'admin', 'middleware'=>'auth_user'],function(){
    Route::get('/','AppController@index');

    Route::resource('linea','LineaController');
    Route::resource('paquete','PaqueteController'); 
    Route::get('eliminardestinos/{id_destino}/{id_paquete}','DetallePaqueteController@eliminar');
    Route::resource('detalle_paquete','DetallePaqueteController');
    Route::resource('/tarifa','TarifaController');
    Route::resource('/tipo','TipoController');
    Route::resource('/usuario','UsuarioController'); 
    Route::resource('servicio','ServicioController');
    Route::get('buscar_servicio','DetalleServicioController@buscar')->name('buscar_servicio');
    Route::resource('detalle_servicio','DetalleServicioController');
    Route::resource('destino','DestinoController');
    Route::resource('imagen','ImagenController');
    Route::resource('tipo_establecimiento','TipoEstablecimientoController');
    Route::resource('establecimiento','EstablecimientoController');
    Route::resource('compras','ComprasController');
    Route::get('detalle/delete/{id}', 'DetalleServicioController@destroy');
});



