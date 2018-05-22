<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|edit
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','tablecontrol@index2');
Route::get('/tambahbarang','tablecontrol@tambah');
Route::post('/tambah','tablecontrol@createmaster');

// Route::get('/datasekolah/check','tablecontrol@check');
// Route::get('/datasekolah','tablecontrol@index');
// Route::get('/datasekolah/create','tablecontrol@create');
// Route::post('/datasekolah','tablecontrol@store_create');
// Route::get('/datasekolah/{id}','tablecontrol@show');
// Route::get('/datasekolah/{id}/edit','tablecontrol@edit');
// Route::put('/datasekolah/{id}','tablecontrol@update');
// Route::delete('/datasekolah/{id}','tablecontrol@destroy');


// Route::get('/blog/{employee_number}','blogController@showid');
// // Route::get('/array','blogController@showArray');

// Route::get('/masterbarang','tablecontrol@masterbarang');
// Route::put('/masterbarang/{$id}','tablecontrol@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
