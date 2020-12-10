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

Route::get('/', function () {
    return view('welcome');
});

Route :: resource('movies', 'MoviesController');
Route :: resource('room', 'RoomController');
Route :: resource('consumables', 'ConsumablesController');
Route :: resource('entrances', 'EntrancesController');
Route :: resource('functions', 'FunctionsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::name('imprimir')->get('/imprimir-pdf', 'Controller@imprimir');
