<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class JenisBarang extends Model
{
    protected $table = "jenisbarang" ;
    protected $primarykey = "id" ;
    protected $fillable = [
        'id', 'nama'
    ];

    public function Barang()
    {
        return $this->hasMany(Barang::class);
    }
}
