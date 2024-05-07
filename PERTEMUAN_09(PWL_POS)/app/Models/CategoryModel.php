<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'kategori_id';
    protected $fillable = [
        'kategori_kode',
        'kategori_nama',
    ];

    public function product()
    {
        return $this->hasMany(ProductModel::class, 'kategori_id', 'kategori_id');
    }
}