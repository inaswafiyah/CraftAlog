<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Komentar;
use App\Models\Produk;
use App\Models\Rating;
use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        return view('Front.base');
    }

    public function front()
    {
        $kategori = Categori::all();
        $produks = Produk::all();
        $produk = Produk::all();
        $produkrandom = Produk::latest()->limit(4)->get();
        $produktangan = Produk::where('categori_id', 3)->get();
        $produkrumah = Produk::where('categori_id', 4)->get();
        $produkaksesoris = Produk::where('categori_id', 5)->get();
        $userRatings = Rating::where('user_id', Auth::id())->pluck('rating', 'produk_id');
        return view('Front.utama', compact('produks', 'produkrandom', 'produktangan', 'produkrumah', 'produkaksesoris', 'produk', 'userRatings', 'kategori'));
    }

    public function produk($slug)
    {
        $kategori = Categori::where('slug', $slug)->first();
        if (!$kategori) {
            abort(404, 'Kategori tidak ditemukan');
        }
        $produk = Produk::where('categori_id', $kategori->id)->get();

        $cate = Categori::where('slug', $slug)->first();
        return view('Front.produkKate', compact('kategori', 'produk', 'cate'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $produk = Produk::where('judul', 'LIKE', "%{$query}%")
            ->orWhere('deskripsi', 'LIKE', "%{$query}%")->get();

        // ini search pakai 2 table
        // $berita = Berita::where('judul', 'LIKE', "%{$query}%")
        // ->orWhereHas('judul', function ($q) use ($query){
        //     $q->where('merk_produk', 'LIKE', "%{$query}%");
        // })->get();

        return view('Front.katalog', compact('produk'));
    }

    // public function filter()
    // {
    //     return view('Front.filter');
    // }

    public function katalog()
    {
        $produk = Produk::all();
        return view('Front.katalog', compact('produk'));
    }

    public function detail()
    {
        $detailaksesoris = Tutorial::with('tutorials')->get();
        return view('Front.detail', compact('detailaksesoris'));
    }

    public function video()
    {
        return view('Front.video');
    }


    public function show($id)
    {
        $produk = Produk::with('tutorials')->findOrFail($id);
        $comments = Komentar::where('product_id', $id)->orderBy('created_at', 'desc')->get();
        $kategori = Categori::all();
        return view('Front.detail', compact('produk', 'comments', 'kategori'));
    }

    public function storeComment(Request $request, $id)
    {
        $validated = $request->validate([
            'comment' => 'required',
        ]);

        Komentar::create([
            'user_id' => Auth::id(),
            'product_id' => $id,
            'comment' => $validated['comment'],
        ]);

        return redirect()->route('produk.show', $id)->with('Sukses', 'Berhasil Menambahkan Data');
    }

    public function kategori($slug)
    {
        $kategori = Categori::all();
        $produk = Produk::whereHas('kategori', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->get();

        return view('Front.produkKate', compact('produk', 'kategori'));
    }
}
