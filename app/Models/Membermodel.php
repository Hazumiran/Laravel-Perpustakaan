<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membermodel extends Model
{
    use HasFactory;
    protected $table = "member";
    protected $fillable = [
        'kode_member',
        'nama_lengkap',
        'alamat'
    ];
}
