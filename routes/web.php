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
Route::get('/blog','FrontController@blog');
Route::get('/jadwaldokter','FrontController@jdwldokter');
Route::get('/pelayananmedisspesialistik','FrontController@pmspesialistik');
Route::get('/hyperbaric','FrontController@hyperbaric');
Route::get('/angiografi','FrontController@angiografi');
Route::get('/mcheckup','FrontController@mcheckup');
Route::get('/aesthetic','FrontController@aesthetic');
Route::get('/melati','FrontController@melati');
Route::get('/voluntary','FrontController@voluntary');
Route::get('/penunjangm','FrontController@penunjangm');
Route::get('/audiometri','FrontController@audiometri');
Route::get('/rekammdis','FrontController@rekammdis');
Route::get('/sterilisasi','FrontController@sterilisasi');
Route::get('/kamarbersalin','FrontController@kamarbersalin');
Route::get('/rawatinap','FrontController@rawatinap');
Route::get('/cs','FrontController@cs');
Route::get('/kereta','FrontController@kereta');
Route::get('/Laundry','FrontController@laundry');
Route::get('/prohani','FrontController@prohani');
Route::get('/pemulasaranjenazah','FrontController@jenazah');
Route::get('/pendaftaran','FrontController@pendaftaran');
Route::get('/penjagaan','FrontController@penjagaan');
Route::get('/depbangdiklat','FrontController@depbangdiklat');
Route::get('/pengelolaanlimbah','FrontController@pengelolaanlimbah');
Route::get('/ambulance','FrontController@ambulance');
Route::get('/blog/{blog}','FrontController@show')->name('artikel.detail');
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
    Route::resource('jadwal', 'jadwalController');
    Route::get('/showJadwal','JadwalController@listjadwal');
});


