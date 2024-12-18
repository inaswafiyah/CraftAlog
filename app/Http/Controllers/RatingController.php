<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function rate(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id', 
            'rating' => 'required|integer|min:1|max:5',
        ]);
    
        $rating = Rating::updateOrCreate(
            ['user_id' => Auth::id(), 'produk_id' => $request->produk_id], 
            ['rating' => $request->rating] 
        );
    
        return response()->json(['success' => true]);
    }    
    
}
