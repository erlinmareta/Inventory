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
    	return view('jenisbarang',['jenisbarang' => $jenisbarang]);
}
public function tambah()
{
 
	// memanggil view tambah
	return view('tambahjenis');
 
}
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('jenisbarang')->insert([
		'nama' => $request->nama,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/jenisbarang');
 
}
public function edit($id)
{

	$jenisbarang = DB::table('jenisbarang')->where('id',$id)->get();
	
	return view('editjenis',['jenisbarang' => $jenisbarang]);
 
}
public function update(Request $request)
{
	// update data pegawai
	DB::table('jenisbarang')->where('id',$request->id)->update([
		'nama' => $request->nama,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/jenisbarang');
}
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('jenisbarang')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/jenisbarang');
}
}