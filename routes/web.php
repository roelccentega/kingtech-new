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

// general
Route::get('/','GeneralController@index');
Route::post('/','GeneralController@postIndex');
Route::get('/nosotros','GeneralController@about');
Route::get('/contacto','GeneralController@contact');

// productos
Route::get('/tinbet','ProductsController@tinbet');
Route::get('/betgana','ProductsController@betgana');
// Route::get('/video-loteria','ProductsController@videoLoteria');
Route::get('/bingoxd','ProductsController@bingoXd');
Route::get('/betganarace','ProductsController@betganaRace');

// cada de apuestas

Route::get('/casa-de-apuestas','HomeBetsController@homeBets');
Route::get('/punto-de-apuestas','HomeBetsController@pointBets');
Route::get('/tiendas-de-apuestas-deportivas','HomeBetsController@storeBets');

// soporte
Route::get('/terminos-y-condiciones','HomeBetsController@terms');

//Events

Route::get('/eventos/peru-gaming-show', 'GeneralController@peruGaming');

Route::get('/eventos/expo-amazonica-tingo-maria-2023', 'GeneralController@exporFeria');