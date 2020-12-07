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

Route::get('/berita', 'controller1@index');

Route::get('/berita/writenews', 'controller1@writenews');

Route::get('/berita/tampil', 'controller1@tampil');

Route::post('/berita/simpan', 'controller1@simpan');

Route::get('/berita/single', 'controller1@single');

Route::get('/berita/contact', 'controller1@contact');

Route::get('/berita/studi', 'controller1@studi');

Route::get('/berita/kejagung', 'controller1@kejagung');

Route::get('/berita/survei', 'controller1@survei');

Route::get('/berita/tiara', 'controller1@tiara');

Route::get('/berita/brigjen', 'controller1@brigjen');

Route::get('/berita/pradi', 'controller1@pradi');

Route::get('/berita/polda', 'controller1@polda');

Route::get('/berita/marc', 'controller1@marc');

Route::get('/berita/bola', 'controller1@bola');

Route::get('/berita/tan', 'controller1@tan');

Route::get('/berita/siber', 'controller1@siber');

Route::get('/berita/iphone', 'controller1@iphone');

Route::get('/berita/smartphone', 'controller1@smartphone');

Route::get('/berita/waralaba', 'controller1@waralaba');

Route::get('/berita/brand', 'controller1@brand');

Route::get('/berita/mendag', 'controller1@mendag');

Route::get('/berita/rizky', 'controller1@rizky');

Route::get('/berita/sara', 'controller1@sara');

Route::get('/berita/writenews', 'controller1@writenews');

Route::get('image','ImageController@index');
Route::post('image','ImageController@upload');

Route::get('/index', 'BeritaController@index');
