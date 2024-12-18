<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'nama_kategori',
        'slug',
    ];

    //  public function produk()
    // {
    //     return $this->hasMany(Produk::class);
    // }

    public function produk() {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
    public function kategori(){
        return $this->belongsTo(Categori::class, 'kategori_id');
    }
}
