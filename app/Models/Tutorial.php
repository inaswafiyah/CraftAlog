<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $table = 'tutorials';

    protected $fillable = [
        'produk_id',
        'langkah',
        'bahan',
        'deskripsi',
    ];

    // app/Models/Tutorial.php

public function produk()
{
    return $this->belongsTo(Produk::class, 'produk_id');
}

public function tutorials()
    {
        return $this->hasMany(Tutorial::class, 'produk_id');
    }

}
