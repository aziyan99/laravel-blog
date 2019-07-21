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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'BlogController@index');

Route::get('/blog/tambah', 'BlogController@add');

Route::post('/blog/save', 'BlogController@saveBlog');

Route::get('/blog/lihat/{id}', 'BlogController@lihat');

Route::get('/blog/ubah/{id}', 'BlogController@ubah');

Route::put('/blog/simpanUbah/{id}', 'BlogController@simpanUbah');

Route::get('/blog/hapus/{id}', 'BlogController@hapus');

Route::get('/kontak', 'KontakController@index');

Route::get('/tentang', 'TentangController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
