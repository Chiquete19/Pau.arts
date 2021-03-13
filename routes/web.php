<?php

use Illuminate\Support\Facades\Route;


Route::get('/','Controlador@inicio')->name('Principal');
Route::get('Pulseras','Controlador@pulseras')->name('Pulseras');
Route::get('Sesion','Controlador@sesion')->name('Sesion');
Route::post('Cuenta','Controlador@cuenta')->name('Cuenta');
Route::post('Agrega','Controlador@Agrega')->name('Agrega');
Route::get('editarPulseras','Controlador@editarPulseras')->name('editarPulseras');
Route::get('agregar','Controlador@agregar')->name('agregar');
Route::get('editarRegistro','Controlador@editarRegistro')->name('editarRegistro');
Route::get('eliminarRegistro','Controlador@eliminarRegistro')->name('eliminarRegistro');
Route::get('ActualizaDatos','Controlador@ActualizaDatos')->name('ActualizaDatos');

