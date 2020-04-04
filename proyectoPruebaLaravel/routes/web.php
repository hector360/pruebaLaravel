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
Route::get('/clima','ClimaController@mostrarClima');
Route::get('/crudventa','CrudVentaController@principal');
Route::get('/formulariopago','FormularioPagoController@formulario');
Route::get('/guardardatos','FormularioPagoController@GuardarDatos');
Route::get('/agradecimiento', function () {
    return view('agradecimiento');
});