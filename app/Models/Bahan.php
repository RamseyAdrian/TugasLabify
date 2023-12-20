<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $table = "bahan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kode', 'nama', 'jumlah', 'harga'
    ];
}
