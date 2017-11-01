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


Route::get('/test', function () {
    return view('notes-template');
});


Route::get('/form', function () {
    return view('heizungs-form');
});

Route::resource('cars', 'CarController');
Route::resource('heizung', 'HeizungController');
