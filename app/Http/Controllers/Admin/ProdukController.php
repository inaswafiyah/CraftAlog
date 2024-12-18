<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categori;
use App\Models\Komentar;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    public function index() {
        $produk = Produk::all();
        return view('Admin.Produk.indexproduk', compact('produk'));
    }

    public function create() {
        $kategori = Categori::all();
        return view('Admin.Produk.createProduk', compact('kategori'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'judul' => 'required|unique:produks',
            'deskripsi' => 'required',
            'url_gambar' => 'nullable|url',
            'categori_id' => 'required',
            'image' => 'nullable|image|max:2048',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.unique' => 'Judul sudah ada',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'url_gambar.url' => 'URL Gambar harus berupa URL yang valid',
            'categori_id.required' => 'Kategori harus diisi',
            'categori_id.exists' => 'Kategori tidak valid',
            'image.image' => 'File harus berupa gambar',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Produk::create([
            'judul' => $request->judul,
            'deskripsi' => strip_tags($request->deskripsi), // Menghapus tag HTML
            'url_gambar' => $request->url_gambar,
            'categori_id' => $request->categori_id,
            'image' => $imagePath,
            'slug' => Str::slug($request->judul)
        ]);

        return redirect()->route('index.produk')->with('Sukses', 'Produk berhasil ditambahkan!');
    }

    public function delete(Request $request) {
        $produk = Produk::findOrFail($request->id);
        $produk->delete();

        return redirect()->back()->with('Delete', 'Berhasil Menghapus Data');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|unique:produks',
            'deskripsi' => 'required',
            'url_gambar' => 'nullable|url',
            'categori_id' => 'required',
            'image' => 'nullable|image|max:2048',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.unique' => 'Judul sudah ada',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'url_gambar.url' => 'URL Gambar harus berupa URL yang valid',
            'categori_id.required' => 'Kategori harus diisi',
            'categori_id.exists' => 'Kategori tidak valid',
            'image.image' => 'File harus berupa gambar',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $produk = Produk::findOrFail($id);
        $produk->update([
            'judul' => $request->judul,
            'deskripsi' => strip_tags($request->deskripsi), // Menghapus tag HTML
            'url_gambar' => $request->url_gambar,
            'categori_id' => $request->categori_id,
            'image' => $imagePath,
        ]);

        return redirect()->route('index.produk')->with('Sukses', 'Data Produk Berhasil di Update');
    }

    public function edit($id) {
        $produk = Produk::find($id);
        $kategori = Categori::all();

        return view('Admin.Produk.updateProduk', compact('produk', 'kategori'));
    }

    public function show($id)
{
    // Ambil data produk dan komentar terkait produk tersebut
    $produk = Produk::with('tutorials')->findOrFail($id);
    $comments = Komentar::where('product_id', $id)->orderBy('created_at', 'desc')->get();

    // Kirim produk dan komentar ke view
    return view('Front.utama', compact('produk', 'comments'));
}

}
