<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id'; 
    public $timestamps = true; 

    protected $fillable = [
        'user_id',
        'product_id',
        'comment', 
    ];

    /**
     * Relasi ke tabel users
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi ke tabel products
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
