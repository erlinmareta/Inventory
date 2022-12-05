<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;


class Barang extends Model
{
    protected $table = "barang" ;
    protected $primarykey = "id" ;
    protected $fillable = [
        'id', 'id_jenisbarang', 'name', 'kode', 'stok'
    ];

    public function jenisbarang()
    {
        return $this->belongsTo(jenisbarang::class,'id_jenisbarang');
    }

}