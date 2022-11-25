<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\SatuanController;

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
// Route::get('/icons', function () {
//     return view('icons');
// });
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function(){return view('dashboard');});
    Route::get('/jenisbarang','JenisBarangController@index');
    Route::get('/jenisbarang/tambah','JenisBarangController@tambah');
    Route::post('/jenisbarang/store','JenisBarangController@store');
    Route::get('/jenisbarang/edit/{id}','JenisBarangController@edit');
    Route::post('/jenisbarang/update','JenisBarangController@update');
    Route::get('/jenisbarang/hapus/{id}','JenisBarangController@hapus');
    Route::get('/satuan/satuan','SatuanController@index');
    Route::get('/satuan/tambah','SatuanController@tambah');
    Route::post('/satuan/store','SatuanController@store');
    Route::get('/satuan/edit/{id}','SatuanController@edit');
    Route::post('/satuan/update','SatuanController@update');
    Route::get('/satuan/hapus/{id}','SatuanController@hapus');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
