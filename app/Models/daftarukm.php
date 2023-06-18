<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarukm extends Model
{
    use HasFactory;
    protected $table = 'daftarukms'; 
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'fakultas',

    ];
}
