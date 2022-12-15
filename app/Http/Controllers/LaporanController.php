<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Supplier;
use App\Models\Satuan;
use App\Models\User;


use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporanbarangmasuk()
    {

        $laporanbarangmasuk = BarangMasuk::join('barang', 'barang.id', '=', 'barangmasuk.id_barang')
            ->join('supplier', 'supplier.id', '=', 'barangmasuk.id_supplier')
            ->select('barangmasuk.*', 'supplier.nama', 'barang.name')
            ->get();

        $barang = Barang::all();
        $supplier = Supplier::all();


        // mengirim data pegawai ke view index
        return view('laporanbarangmasuk/laporanbarangmasuk', ['laporanbarangmasuk' => $laporanbarangmasuk]);
    }

    public function cetakbarangmasuk(Request $request)
    {
        $created_at   = date('Y-m-d H:i:s');
        $tgl_mulai    = $request->dateStart;
        $tgl_selesai  = $request->dateEnd;
        $user = DB::table('users')->get();

        if ($tgl_mulai and $tgl_selesai) {

            $cetakbarangmasuk = BarangMasuk::join('barang', 'barang.id', '=', 'barangmasuk.id_barang')
                ->join('supplier', 'supplier.id', '=', 'barangmasuk.id_supplier')
                ->whereBetween('barangmasuk.date', [$tgl_mulai, $tgl_selesai])
                ->select('barangmasuk.*', 'supplier.nama', 'barang.name')
                ->get();

            $barang = Barang::all();
            $supplier = Supplier::all();
            // $sum_total = BarangKeluar::whereBetween('barangmasuk.tgl_brg_masuk', [$tgl_mulai,$tgl_selesai])
            //                 ->sum('total');

        } else {
            $cetakbarangmasuk = BarangMasuk::join('barang', 'barang.id', '=', 'barangmasuk.id_barang')
                ->get();
        }
        // mengirim data pegawai ke view index
        return view('laporanbarangmasuk/cetakbarangmasuk', ['cetakbarangmasuk' => $cetakbarangmasuk, 'user' => $user]);
    }

    public function laporanbarangkeluar()
    {
        $laporanbarangkeluar = BarangKeluar::join('barang', 'barang.id', '=', 'barangkeluar.id_barang')
            ->get();

        $barang = Barang::all();



        return view('laporanbarangkeluar/laporanbarangkeluar', ['laporanbarangkeluar' => $laporanbarangkeluar]);
    }

    public function cetakbarangkeluar(Request $request)
    {
        $created_at   = date('Y-m-d H:i:s');
        $tgl_mulai    = $request->dateStart;
        $tgl_selesai  = $request->dateEnd;

        if ($tgl_mulai and $tgl_selesai) {
            $cetakbarangkeluar = BarangKeluar::join('barang', 'barang.id', '=', 'barangkeluar.id_barang')
                ->whereBetween('barangkeluar.date', [$tgl_mulai, $tgl_selesai])
                ->get();
        } else {
            $cetakbarangkeluar = BarangKeluar::join('barang', 'barang.id', '=', 'barangkeluar.id_barang')
                ->get();
        }


        // $barang = Barang::all();


        $user = DB::table('users')->get();
        return view('laporanbarangkeluar/cetakbarangkeluar', ['cetakbarangkeluar' => $cetakbarangkeluar, 'user' => $user]);
    }
}