<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AnimesController@index')->name('listarSeries');
Route::get('/animes', 'AnimesController@index')->name('listarSeries');
Route::get('/animes/criar', 'AnimesController@create')->name('criarAnime');
Route::post('/animes/criar', 'AnimesController@store')->name('')->name('persistirAnime');
Route::delete('/animes/{id}','AnimesController@destroy')->name('deletarAnime');

