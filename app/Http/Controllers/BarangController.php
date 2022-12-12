<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\JenisBarang;

use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barang = Barang::join('jenisbarang', 'jenisbarang.id', '=', 'barang.id_jenisbarang')
				 ->get();
		$jenisbarang = JenisBarang::all();

    	// mengirim data pegawai ke view index
    	return view('barang/barang',['barang' => $barang]);
}

public function tambah()
{
	$barang = Barang::all();
	$jenisbarang = JenisBarang::all();
	

	// memanggil view tambah
	return view('barang/tambah',['jenisbarang' => $jenisbarang]);
 
}
public function store(Request $request)
{
	$barang = new Barang();
	$barang->name = $request->name;
	$barang->kode = $request->kode;
	$barang->stok = $request->stok;
	$barang->id_jenisbarang = $request->nama;
	$barang->save();

	// alihkan halaman ke halaman barang
	return redirect('/barang/barang')->with('success', 'Berhasil ditambahkan!');
 
}

public function edit($id)
{

	$barang = Barang::findorfail($id);
	$jenisbarang = JenisBarang::all();
	
	return view('barang/edit',['barang' => $barang , 'jenisbarang' => $jenisbarang]);
 
}
public function update(Request $request)
{
		// update data satuan
		DB::table('barang')->where('id',$request->id)->update([
			'id_jenisbarang' => $request->id_jenisbarang,
			'name' => $request->name,
			'kode' => $request->kode,
			'stok' => $request->stok,
		]);
		
	return redirect('/barang/barang')->with('success', 'Berhasil diubah!');
}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('barang')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman satuan
	return redirect('/barang/barang')->with('success', 'Berhasil dihapus!');

}





}
