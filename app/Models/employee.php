<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [ 
        'nama_lengkap', 
        'email', 
        'nomor_telepon', 
        'tanggal_lahir', 
        'alamat', 
        'tanggal_masuk', 
        'status', 
    ]; 
}
