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


Route::get('siswa', 'SiswaController@index');
Route::get('tambah-siswa', 'SiswaController@tambah');
Route::get('edit/{id}', 'SiswaController@edit');
Route::get('hapus/{id}', 'SiswaController@delete');

Route::post('create-siswa', 'SiswaController@create');
Route::post('update-siswa', 'SiswaController@update');
