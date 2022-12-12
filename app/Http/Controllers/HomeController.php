<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;

use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $barang = Barang::count();
        $supplier = Supplier::count();
        $karyawan = Karyawan::count();

        $date = date('Y-m-d');

        $brg_masuk_today = BarangMasuk::where('date', '=', $date)->count();
        $brg_keluar_today = BarangKeluar::where('date', '=', $date)->count();

        return view('dashboard' , compact('user', 'barang', 'supplier', 'karyawan', 'brg_masuk_today', 'brg_keluar_today'));
    }
}
