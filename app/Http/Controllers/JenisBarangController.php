<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisBarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$jenisbarang = DB::table('jenisbarang')->get();
 
    	// mengirim data pegawai ke view index
    	return view('jenis/jenisbarang',['jenisbarang' => $jenisbarang]);
}
public function tambah()
{
 
	// memanggil view tambah
	return view('jenis/tambahjenis');
 
}
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('jenisbarang')->insert([
		'nama' => $request->nama,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/jenis/jenisbarang');
 
}
public function edit($id)
{

	$jenisbarang = DB::table('jenisbarang')->where('id',$id)->get();
	
	return view('jenis/editjenis',['jenisbarang' => $jenisbarang]);
 
}
public function update(Request $request)
{
	// update data jenis barang
	DB::table('jenisbarang')->where('id',$request->id)->update([
		'nama' => $request->nama,
	]);
	// alihkan halaman ke halaman jenis barang 
	return redirect('/jenis/jenisbarang');
}
public function hapus($id)
{
	// menghapus data jenis barang berdasarkan id yang dipilih
	DB::table('jenisbarang')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman jenis barang
	return redirect('/jenis/jenisbarang');
}
}