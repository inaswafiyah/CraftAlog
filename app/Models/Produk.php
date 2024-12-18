<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = [
        'judul',
        'deskripsi',
        'url_gambar',
        'categori_id',
        'slug',
        'image',
    ];

    public function kategori()
    {
        return $this->belongsTo(Categori::class, 'categori_id', 'id');
    }
    public function tutorials()
    {
        return $this->hasMany(Tutorial::class, 'produk_id');
    }

    public function likes()
{
    return $this->hasMany(Like::class, 'produk_id');
}

    public function isLikedByUser($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }

    public function likedByUsers()
{
    return $this->belongsToMany(User::class, 'likes', 'produk_id', 'user_id')
                ->withTimestamps();
}

}
