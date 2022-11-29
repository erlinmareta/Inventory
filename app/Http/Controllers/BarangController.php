<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;

use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barang = Barang::all();
 
    	// mengirim data pegawai ke view index
    	return view('barang/barang',['barang' => $barang]);
}

public function tambah()
{
	$barang = Barang::all();
 
	// memanggil view tambah
	return view('barang/tambah',['barang' => $barang]);
 
}
public function store(Request $request)
{
	// insert data ke table satuan
	DB::table('barang')->where('id',$request->id)->update([
		'nama' => $request->nama,
        'kode' => $request->kode,
        'id_suplier' => $request->id_suplier,
	]);
	// alihkan halaman ke halaman satuan
	return redirect('/barang/barang');
 
}

public function edit($id)
{

	$barang = Barang::all()->where('id',$id);
	
	return view('barang/edit',['barang' => $barang]);
 
}
public function update(Request $request)
{
	// update data satuan
	DB::table('barang')->where('id',$request->id)->update([
		'nama' => $request->nama,
        'kode' => $request->kode,
        'id_suplier' => $request->id_suplier,
	]);
	// alihkan halaman ke halaman satuan
	return redirect('/barang/barang');
}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('barang')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman satuan
	return redirect('/barang/barang');

}





}
