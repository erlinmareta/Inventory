<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SuppplierController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\LaporanController;



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

    // jenis
    Route::get('/jenis/jenisbarang','JenisBarangController@index');
    Route::get('/jenisbarang/tambah','JenisBarangController@tambah');
    Route::post('/jenisbarang/store','JenisBarangController@store');
    Route::get('/jenisbarang/edit/{id}','JenisBarangController@edit');
    Route::post('/jenisbarang/update','JenisBarangController@update');
    Route::get('/jenisbarang/hapus/{id}','JenisBarangController@hapus');

    // satuan
    Route::get('/satuan/satuan','SatuanController@index');
    Route::get('/satuan/tambah','SatuanController@tambah');
    Route::post('/satuan/store','SatuanController@store');
    Route::get('/satuan/edit/{id}','SatuanController@edit');
    Route::post('/satuan/update','SatuanController@update');
    Route::get('/satuan/hapus/{id}','SatuanController@hapus');

    // user
    Route::get('/user/user','UserController@index');
    Route::get('/user/tambah','UserController@tambah');
    Route::post('/user/store','UserController@store');
    Route::get('/user/edit/{id}','UserController@edit');
    Route::post('/user/update','UserController@update');
    Route::get('/user/hapus/{id}','UserController@hapus');

    //barang 
    Route::get('/barang/barang','BarangController@index');
    Route::get('/barang/tambah','BarangController@tambah');
    Route::post('/barang/store','BarangController@store');
    Route::get('/barang/edit/{id}','BarangController@edit');
    Route::post('/barang/update','BarangController@update');
    Route::get('/barang/hapus/{id}','BarangController@hapus');
    


    //Karyawan
    Route::get('/karyawan/karyawan','KaryawanController@index');
    Route::get('/karyawan/tambah','KaryawanController@tambah');
    Route::post('/karyawan/store','KaryawanController@store');
    Route::get('/karyawan/edit/{id}','KaryawanController@edit');
    Route::post('/karyawan/update','KaryawanController@update');
    Route::get('/karyawan/hapus/{id}','KaryawanController@hapus');
    Route::get('/karyawan/detail/{id}','KaryawanController@detail');

    //supplier 
    Route::get('/supplier/supplier','SupplierController@index');
    Route::get('/supplier/tambah','SupplierController@tambah');
    Route::post('/supplier/store','SupplierController@store');
    Route::get('/supplier/edit/{id}','SupplierController@edit');
    Route::post('/supplier/update','SupplierController@update');
    Route::get('/supplier/hapus/{id}','SupplierController@hapus');
    

    //barang masuk
    Route::get('/barangmasuk/barangmasuk','BarangMasukController@index');
    Route::get('/barangmasuk/tambah','BarangMasukController@create');
    Route::post('/barangmasuk/store','BarangMasukController@store');
    Route::get('/barangmasuk/hapus/{id}','BarangMasukController@hapus');

    //barang keluar
    Route::get('/barangkeluar/barangkeluar','BarangKeluarController@index');
    Route::get('/barangkeluar/tambah','BarangKeluarController@create');
    Route::post('/barangkeluar/store','BarangKeluarController@store');
    
    //laporan masuk
    Route::get('/laporanbarangmasuk/laporanbarangmasuk','LaporanController@laporanbarangmasuk');
    Route::get('/laporanbarangmasuk/cetakbarangmasuk','LaporanController@cetakbarangmasuk');

    //laporan keluar
    Route::get('/laporanbarangkeluar/laporanbarangkeluar','LaporanController@laporanbarangkeluar');
    Route::get('/laporanbarangkeluar/cetakbarangkeluar','LaporanController@cetakbarangkeluar');
   

   
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');