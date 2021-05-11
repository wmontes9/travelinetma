<?php
Route::get('/inicio', function () {
    return view('plantilla/welcome');
});

Route::get('/',"InicioController@index" );
