<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\BarangMasuk;
use App\Models\Supplier;


use Illuminate\Support\Facades\DB;

class BarangMasukController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barangmasuk = BarangMasuk::join('barang', 'barang.id', '=', 'barangmasuk.id_barang')
                    ->join('supplier', 'supplier.id', '=', 'barangmasuk.id_supplier')
                    ->select('barangmasuk.*', 'supplier.nama', 'barang.name')
                    
                    ->get();

        $barang = Barang::all();
        $supplier = Supplier::all();
 
    	// mengirim data pegawai ke view index
    	return view('barangmasuk/barangmasuk',['barangmasuk' => $barangmasuk]);
}
    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view('barangmasuk/tambah',['barang' => $barang], ['supplier' => $supplier]);
    }
    public function store(Request $request)
    {
        BarangMasuk::create([
            'nomasuk' => $request->nomasuk,
            'id_barang' => $request->id_barang,
            'id_supplier' => $request->id_supplier,
            'jumlah' => $request->jumlah,
            'date' => $request->date,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // alihkan halaman ke halaman barang
        $barang = Barang::find($request->id_barang);

        $barang->stok += $request->jumlah;
        $barang->save();
        return redirect('/barangmasuk/barangmasuk')->with('success', 'Data Berhasil ditambahkan!');




    }
}
