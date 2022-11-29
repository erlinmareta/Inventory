<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
public function index()
{
    // mengambil data dari table pegawai
    $karyawan = DB::table('karyawan')->get();

    // mengirim data pegawai ke view index
    return view('karyawan/karyawan',['karyawan' => $karyawan]);
}

public function tambah()
{

// memanggil view tambah
return view('karyawan/tambah');

}

public function store(Request $request)
{
// insert data ke table user
DB::table('karyawan')->insert([
    'nip' => $request->nip,
    'nama' => $request->nama,
    'alamat' => $request->alamat,
    'tanggal' => $request->tanggal,
    'hp' => $request->hp,
]);
// alihkan halaman user
return redirect('/karyawan/karyawan');

}

public function edit($id)
{

$karyawan = DB::table('karyawan')->where('id',$id)->get();

return view('karyawan/edit',['karyawan' => $karyawan]);

}


public function update(Request $request)
{
// update data user
DB::table('karyawan')->where('id',$request->id)->update([
    'nip' => $request->nip,
    'nama' => $request->nama,
    'alamat' => $request->alamat,
    'tanggal' => $request->tanggal,
    'hp' => $request->hp,
]);
// alihkan halaman ke halaman user
return redirect('/karyawan/karyawan');
}

public function hapus($id)
{
// menghapus data user berdasarkan id yang dipilih
DB::table('karyawan')->where('id',$id)->delete();
    
// alihkan halaman ke halaman user
return redirect('/karyawan/karyawan');

}
public function detail($id)
{

    $karyawan = DB::table('karyawan')->where('id',$id)->get();

    return view('karyawan/detail',['karyawan' => $karyawan]);

}

}
