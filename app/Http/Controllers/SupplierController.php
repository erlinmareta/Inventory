<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$supplier = Supplier::all();
 
    	// mengirim data pegawai ke view index
    	return view('supplier/supplier',['supplier' => $supplier]);
}

public function tambah()
{
 
	// memanggil view tambah
	return view('supplier/tambah');
 
}
public function store(Request $request)
{
	// insert data ke table satuan
	$supplier = new Supplier();
	$supplier->nama = $request->nama;
	$supplier->alamat = $request->alamat;
	$supplier->hp = $request->hp;
	$supplier->save();
	
	// alihkan halaman ke halaman satuan
	return redirect('/supplier/supplier');
 
}

public function edit($id)
{

	$supplier = DB::table('supplier')->where('id',$id)->get();
	
	return view('supplier/edit',['supplier' => $supplier]);
 
}
public function update(Request $request)
{
	// update data satuan
	DB::table('supplier')->where('id',$request->id)->update([
		'nama' => $request->nama,
        'alamat' => $request->alamat,
        'hp' => $request->hp,
	]);
	// alihkan halaman ke halaman satuan
	return redirect('/supplier/supplier');
}
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('supplier')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman satuan
	return redirect('/supplier/supplier');

}

}
