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

Route::get('/', 'WelcomeController@index');

Route::get('/sewa', 'SewaController@showSewa');
Route::post('/sewa', 'SewaController@uploadSewa');
Route::get('/daftarVirtual', 'SewaController@viewVirtual');
Route::get('/detailVirtual/{id}', 'SewaController@detailVirtual');


Route::get('/syarat', 'PageController@showSyarat');
Route::get('/panduan', 'PageController@showPanduan');
Route::get('/pemilik', 'PageController@showPemilik');
Route::get('/contact', 'PageController@showContact');
Route::post('/contact', 'PageController@uploadContact');
Route::get('/faq', 'PageController@showFAQ');
Route::get('/about', 'PageController@showAbout');
Route::get('/info', 'PageController@showInfo');
Route::get('/karir', 'PageController@showKarir');

Route::get('/peta', 'MapController@showMap');