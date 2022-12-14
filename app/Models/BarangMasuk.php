<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = "barangmasuk" ;
    protected $fillable = [
        'id', 
        'nomasuk',
        'id_supplier',
        'id_barang', 
        'date', 
        'jumlah'
    ];
    
}
