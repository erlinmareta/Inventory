<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SatuanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$satuan = DB::table('satuan')->get();
 
    	// mengirim data pegawai ke view index
    	return view('satuan/satuan',['satuan' => $satuan]);
}

public function tambah()
{
 
	// memanggil view tambah
	return view('satuan/tambah');
 
}
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('satuan')->insert([
		'nama' => $request->nama,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/satuan/satuan');
 
}

public function edit($id)
{

	$satuan = DB::table('satuan')->where('id',$id)->get();
	
	return view('satuan/edit',['satuan' => $satuan]);
 
}
public function update(Request $request)
{
	// update data pegawai
	DB::table('satuan')->where('id',$request->id)->update([
		'nama' => $request->nama,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/satuan/satuan');
}
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('satuan')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/satuan/satuan');

}

}
