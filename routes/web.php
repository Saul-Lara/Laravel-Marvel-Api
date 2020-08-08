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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', 'ComicsController@index')->name('comics.index');
Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');

Route::get('/characters', 'CharactersController@index')->name('characters.index');
Route::get('/characters/page/{page?}', 'CharactersController@index')->name('characters.index');
Route::get('/characters/{character}', 'CharactersController@show')->name('characters.show');

//Route::view('/', 'index');

//Route::view('/comic', 'show');