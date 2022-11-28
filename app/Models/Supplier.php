<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "supplier" ;
    protected $primarykey = "id" ;
    protected $fillable = [
        'id', 'nama', 'alamat', 'hp'
    ];

    public function Barang()
    {
        return $this->hasMany(Barang::class);
    }
}
