<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'inicio')->name('inicio');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/datatable', 'datatable')->name('tablas');


Route::resource('portafolio', 'ProjectController')
    ->parameters(['portafolio' => 'project'])
    ->names('proyectos');

Route::view('/contacto', 'contacto')->name('contacto');
Route::post('contacto', 'ContactoController@store')->name('mensaje.store');
Auth::routes(['register' => false]);
