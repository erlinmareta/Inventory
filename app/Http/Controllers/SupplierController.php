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
	
	$supplier = new Supplier();
	$supplier->nama = $request->nama;
	$supplier->alamat = $request->alamat;
	$supplier->hp = $request->hp;
	$supplier->save();
	
	
	return redirect('/supplier/supplier')->with('success', 'Berhasil ditambahkan!');
 
}

public function edit($id)
{

	$supplier = DB::table('supplier')->where('id',$id)->get();
	
	return view('supplier/edit',['supplier' => $supplier]);
 
}
public function update(Request $request)
{

	DB::table('supplier')->where('id',$request->id)->update([
		'nama' => $request->nama,
        'alamat' => $request->alamat,
        'hp' => $request->hp,
	]);

	return redirect('/supplier/supplier')->with('success', 'Data Berhasil diubah!');
}

public function hapus($id)
{

	DB::table('supplier')->where('id',$id)->delete();
		

	return redirect('/supplier/supplier')->with('success', 'Data Berhasil dihapus!');

}

}
