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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LaptopController@index');
Route::get('/tampil', 'LaptopController@tampil')->name('tampil');
Route::get('create', 'LaptopController@create')->name('create');
Route::post('insert', 'LaptopController@insert')->name('insert');
Route::get('delete/{id}', 'LaptopController@delete')->name('delete');
Route::get('edit/{id}', 'LaptopController@edit')->name('edit');
Route::post('edit/{id}', 'LaptopController@submitedit')->name('submitedit');
Route::get('search', 'LaptopController@search')->name('search');
Route::get('print', 'LaptopController@print')->name('print');
