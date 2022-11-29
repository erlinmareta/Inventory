<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\JenisBarang;

class Barang extends Model
{
    protected $table = "barang" ;
    protected $primarykey = "id" ;
    protected $fillable = [
        'id', 'id_jenis', 'id_suplier', 'kode', 'nama', 'image'
    ];

    public function supplier()
    {
        return $this->belongsTo(supplier::class,'id_suplier');
    }

    public function jenisbarang()
    {
        return $this->belongsTo(jenisbarang::class,'id_jenis');
    }
}