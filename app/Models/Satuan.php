<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    protected $table = "satuan" ;
    protected $primarykey = "id" ;
    protected $fillable = [
        'id', 'nama'
    ];
}
