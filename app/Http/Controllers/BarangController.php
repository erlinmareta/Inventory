<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;

use App\Models\Supplier;

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
	$supplier = Supplier::all();
	

	// memanggil view tambah
	return view('barang/tambah',['supplier' => $supplier]);
 
}
public function store(Request $request)
{
	$barang = new Barang();
	$barang->name = $request->name;
	$barang->kode = $request->kode;
	$barang->id_suplier = $request->nama;
	$barang->save();

	// alihkan halaman ke halaman barang
	return redirect('/barang/barang');
 
}

public function edit($id)
{

	$barang = Barang::findorfail($id);
	$supplier = Supplier::all();
	
	return view('barang/edit',['barang' => $barang , 'supplier' => $supplier]);
 
}
public function update(Request $request, $id)
{
	$barang = Barang::findorfail($id);
	$barang_data = [
		'name' => $request->name,
		'kode' => $request->kode,
		'id_suplier' => $request->id_suplier,
		
	];
	$barang->update($barang_data);
	
	// alihkan halaman ke halaman barang
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
