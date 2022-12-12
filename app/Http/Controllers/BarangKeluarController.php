<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\BarangKeluar;

use Illuminate\Support\Facades\DB;
class BarangKeluarController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barangkeluar = BarangKeluar::join('barang', 'barang.id', '=', 'barangkeluar.id_barang')
                    ->get();

        $barang = Barang::all();
       
 
    	// mengirim data pegawai ke view index
    	return view('barangkeluar/barangkeluar',['barangkeluar' => $barangkeluar, 'barang' => $barang]);
}
    public function create()
    {
        $barang = Barang::all();
        
        return view('barangkeluar/tambah',['barang' => $barang]);
    }
    public function store(Request $request)
    {

        // alihkan halaman ke halaman barang
        $barang = Barang::find($request->id_barang);

        if($barang->stok < $request->jumlah)
        {
            return redirect('/barangkeluar/tambah')->with('error', 'Jumlah Barang Lebih Dari Stok Yang Ada');
        }
        else{
            barangkeluar::create([
                'nokeluar' => $request->nokeluar,
                'id_barang' => $request->id_barang,
               
                'jumlah' => $request->jumlah,
                'date' => $request->date,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        $barang->stok -= $request->jumlah;
        $barang->save();
        return redirect('/barangkeluar/barangkeluar')->with('success', 'Data Berhasil ditambahkan!');




    }
}
