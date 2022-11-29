<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
public function index()
{
    // mengambil data dari table pegawai
    $user = DB::table('users')->get();

    // mengirim data pegawai ke view index
    return view('user/user',['user' => $user]);
}

public function tambah()
{

// memanggil view tambah
return view('user/tambahuser');

}

public function store(Request $request)
{
// insert data ke table user
DB::table('users')->insert([
    'name' => $request->name,
    'email' => $request->email,
    'password' => $request->password,
]);
// alihkan halaman user
return redirect('/user/user');

}

public function edit($id)
{

$user = DB::table('users')->where('id',$id)->get();

return view('user/edituser',['user' => $user]);

}


public function update(Request $request)
{
// update data user
DB::table('users')->where('id',$request->id)->update([
    'name' => $request->name,
    'email' => $request->email,
    'password' => $request->password,
]);
// alihkan halaman ke halaman user
return redirect('/user/user');
}

public function hapus($id)
{
// menghapus data user berdasarkan id yang dipilih
DB::table('users')->where('id',$id)->delete();
    
// alihkan halaman ke halaman user
return redirect('/user/user');

}
}
