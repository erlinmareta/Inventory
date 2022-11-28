<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang" ;
    protected $primarykey = "id" ;
    protected $fillable = [
        'id', 'id_jenis', 'id_supplier', 'kode', 'nama', 'image'
    ];

    public function Supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
