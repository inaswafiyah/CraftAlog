<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TutorialController extends Controller
{
    public function index() {
        $tutorial = Tutorial::with('produk')->get(); 
        $produk = Produk::all(); 

        return view('Admin.Tutorial.indexTutorial', compact('tutorial', 'produk'));
    }

    public function create() {
        $produk = Produk::all(); 
        return view('Admin.Tutorial.createTutorial', compact('produk'));
    }

    public function store(Request $request) {
        $request->validate([
            'produk_id' => 'required|exists:produks,id', 
            'langkah' => 'required|string',
            'bahan' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        Tutorial::create([
            'produk_id' => $request->produk_id,
            'langkah' => strip_tags($request->langkah),
            'bahan' => strip_tags($request->bahan),   
            'deskripsi' => strip_tags($request->deskripsi),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('index.tutorial')->with('Sukses', 'Tutorial berhasil ditambahkan!');
    }

    public function edit($id) {
        $tutorial = Tutorial::findOrFail($id);
        $produk = Produk::all();

        return view('Admin.Tutorial.updateTutorial', compact('tutorial', 'produk'));
    }

    public function update($id) {
        $data = request()->validate([
            'produk_id' => 'required|exists:produks,id',
            'langkah' => 'required|string',
            'bahan' => 'required|string',
            'deskripsi' => 'required|string|max:1000',
        ]);

        $data['langkah'] = strip_tags($data['langkah']);
        $data['bahan'] = strip_tags($data['bahan']);
        $data['deskripsi'] = strip_tags($data['deskripsi']);

        $tutorial = Tutorial::findOrFail($id);
        $tutorial->update($data);

        return redirect()->route('index.tutorial')->with('Sukses', 'Tutorial berhasil diperbarui!');
    }

    public function delete(Request $request) {
        $request->validate([
            'id' => 'required|exists:tutorials,id',
        ]);

        $tutorial = Tutorial::findOrFail($request->id); 
        $tutorial->delete();

        return redirect()->route('index.tutorial')->with('Delete', 'Tutorial berhasil dihapus!');
    }

    public function show($id)
{
    $tutorial = Tutorial::findOrFail($id);
    
    return view('tutorial.detail', compact('tutorial'));
}
}