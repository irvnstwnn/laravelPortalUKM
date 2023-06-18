<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $table = 'beritas'; 
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
