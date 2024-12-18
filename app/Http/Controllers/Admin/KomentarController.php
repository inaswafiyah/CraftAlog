<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komentar;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KomentarController extends Controller
{

    public function index() {
        $komentar = Komentar::all();
        $produk = Produk::all();  
        $komen = Komentar::with(['user', 'produk'])->get();
        return view('Admin.Komentar.indexKomentar', compact('komentar', 'produk', 'komen'));
    }

    public function create() {
        $produk = Produk::all();
        $users = User::all();
        return view('Admin.Komentar.createKomentar', compact('produk', 'users'));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'produk_id' => 'required|exists:produk,id',
            'comments' => 'required|string',
        ], [
            'user_id.required' => 'Pengguna harus dipilih',
            'produk_id.required' => 'Produk harus dipilih',
            'comments.required' => 'Komentar harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->route('komentar.create')->withErrors($validator)->withInput();
        }

        Komentar::create([
            'user_id' => $request->user_id,
            'produk_id' => $request->produk_id,
            'comments' => $request->comments,
        ]);

        return redirect()->route('index.komentar')->with('Sukses', 'Komentar berhasil ditambahkan!');
    }

    public function edit($id) {
        $komentar = Komentar::findOrFail($id);
        $produk = Produk::all();
        $users = User::all();
        return view('Admin.Komentar.editKomentar', compact('komentar', 'produk', 'users'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'produk_id' => 'required|exists:produk,id',
            'comments' => 'required|string',
        ], [
            'user_id.required' => 'Pengguna harus dipilih',
            'produk_id.required' => 'Produk harus dipilih',
            'comments.required' => 'Komentar harus diisi',
        ]);

        $komentar = Komentar::findOrFail($id);
        $komentar->update([
            'user_id' => $request->user_id,
            'produk_id' => $request->produk_id,
            'comments' => $request->comments,
        ]);

        return redirect()->route('index.komentar')->with('Sukses', 'Komentar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $komentar = Komentar::findOrFail($id);
        $komentar->delete();
    
        return redirect()->route('index.komentar')->with('Delete', 'Komentar berhasil dihapus.');
    }
}
