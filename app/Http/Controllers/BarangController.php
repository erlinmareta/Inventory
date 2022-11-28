<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barang = DB::table('barang')->get();
 
    	// mengirim data pegawai ke view index
    	return view('barang/barang',['barang' => $barang]);
}

public function tambah()
{
 
	// memanggil view tambah
	return view('barang/tambah');
 
}
public function store(Request $request)
{
	// insert data ke table satuan
	DB::table('barang')->insert([
		'nama' => $request->nama,
	]);
	// alihkan halaman ke halaman satuan
	return redirect('/barang/barang');
 
}
}
