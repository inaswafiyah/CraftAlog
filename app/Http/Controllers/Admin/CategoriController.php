<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriController extends Controller
{
    public function index() {
        $kategori = Categori::all();
        return view('Admin.Categori.indexCategori', compact('kategori'));
    }

    public function show() {
        $kategorih = Categori::all();
        return view('Front.utama', compact('kategorih')); 
    }
        

    public function create(KategoriRequest $request) {
        Categori::create([
            'nama_kategori' => $request->categori,
            'slug' => Str::slug($request->categori),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    
        return redirect()->back()->with('Sukses', 'Berhasil Menambahkan Data');
    }    

    public function update(KategoriRequest $request) {
        $kategori = Categori::findOrFail($request->id);

        $kategori->nama_kategori = $request->categori;
        $kategori->slug = Str::slug($request->categori);
        $kategori->update();

        return redirect()->back()->with('Sukses', 'Berhasil Mengubah Data');
    }

    public function delete(Request $request) {
        $kategori = Categori::findOrFail($request->id);
        $kategori->delete();

        return redirect()->back()->with('Delete', 'Berhasil Menghapus Data');
    }

}
