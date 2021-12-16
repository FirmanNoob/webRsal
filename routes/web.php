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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','FrontController@index');
Route::get('/katasambutan','FrontController@katasambutan');
Route::get('/visi','FrontController@visi');
Route::get('/sejarah','FrontController@sejarah');
Route::get('/alur','FrontController@alur');
Route::get('/login','AuthController@login')->name('login');
Route::get('/register','AuthController@register');
Route::post('/register/create','AuthController@create');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard','DashboardController@index');
    Route::resource('categori', 'CategoriController');
    Route::resource('artikel', 'ArtikelController');
    Route::resource('dokter', 'DokterController');
});


