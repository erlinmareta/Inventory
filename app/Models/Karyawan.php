<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "supplier" ;
    protected $primarykey = "id" ;
    protected $fillable = [
        'nip', 'nama', 'alamat', 'date'
    ];
}
