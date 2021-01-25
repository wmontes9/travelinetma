<?php
Route::get('/inicio', function () {
    return view('plantilla/index');
});

Route::get('/',"InicioController@index" );
