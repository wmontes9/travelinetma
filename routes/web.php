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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('inicio');
//==========================panel de administracion========================================================
Route::group(['prefix'=>'app'],function(){
	Route::get('/','AppController@index');
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