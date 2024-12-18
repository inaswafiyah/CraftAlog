<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Request $request)
{
    $request->validate([
        'produk_id' => 'required|exists:produks,id'
    ]);

    $produk = Produk::findOrFail($request->produk_id);

    $existingLike = Like::where('user_id', Auth::id())
                        ->where('produk_id', $request->produk_id)
                        ->first();

    if (!$existingLike) {
        Like::create([
            'user_id' => Auth::id(),
            'produk_id' => $request->produk_id
        ]);

        return response()->json([
            'success' => true,
            'liked' => true,
            'likes_count' => $produk->likes()->count()
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Produk ini sudah di-like sebelumnya'
    ]);
}

public function unlike(Request $request)
{
    $request->validate([
        'produk_id' => 'required|exists:produks,id'
    ]);

    $produk = Produk::findOrFail($request->produk_id);

    $like = Like::where('user_id', Auth::id())
                ->where('produk_id', $request->produk_id)
                ->first();

    if ($like) {
        $like->delete();

        return response()->json([
            'success' => true,
            'liked' => false,
            'likes_count' => $produk->likes()->count()
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Tidak ada like untuk dihapus'
    ]);
}

}