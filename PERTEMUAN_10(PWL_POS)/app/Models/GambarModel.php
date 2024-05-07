<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarModel extends Model
{
    use HasFactory;

    protected $table = 'gambar';
    protected $fillable = [
        'nama',
        'deskripsi',
        'file'
    ];
}