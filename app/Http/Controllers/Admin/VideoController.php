<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categori;
use App\Models\Kategori;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function index() {
        $videos = Video::with('kategori')->get();
        return view('Admin.Video.indexVideo', compact('videos'));
    }

    public function create() {
        $kategori = Categori::all();
        return view('Admin.Video.createVideo', compact('kategori'));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|unique:videos',
            'deskripsi' => 'required',
            'url_video' => 'required|url',
            'kategori_id' => 'required|exists:kategori,id', 
            'thumbnail' => 'nullable|image|max:2048',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.unique' => 'Judul sudah ada',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'url_video.required' => 'URL video harus diisi',
            'url_video.url' => 'URL video harus berupa URL yang valid',
            'kategori_id.required' => 'Kategori harus diisi',
            'kategori_id.exists' => 'Kategori tidak valid',
            'thumbnail.image' => 'File harus berupa gambar',
            'thumbnail.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Video::create([
            'judul' => $request->judul,
            'deskripsi' => strip_tags($request->deskripsi),
            'url_video' => $request->url_video,
            'kategori_id' => $request->kategori_id,
            'thumbnail' => $thumbnailPath,
            'slug' => Str::slug($request->judul),
        ]);

        return redirect()->route('index.video')->with('Sukses', 'Video berhasil ditambahkan!');
    }

    public function edit($id) {
        $video = Video::find($id);
        $kategori = Categori::all();
        return view('Admin.Video.updateVideo', compact('video', 'kategori'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'judul' => 'required|unique:videos,judul,' . $id,
            'deskripsi' => 'required',
            'url_video' => 'required|url',
            'kategori_id' => 'required|exists:kategori,id', // Validasi tabel kategori
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        $video = Video::findOrFail($id);

        $thumbnailPath = $video->thumbnail;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $video->update([
            'judul' => $request->judul,
            'deskripsi' => strip_tags($request->deskripsi),
            'url_video' => $request->url_video,
            'kategori_id' => $request->kategori_id,
            'thumbnail' => $thumbnailPath,
        ]);

        return redirect()->route('index.video')->with('Sukses', 'Video berhasil diupdate!');
    }

    public function delete(Request $request) {
        $video = Video::findOrFail($request->id);
        $video->delete();

        return redirect()->back()->with('Delete', 'Berhasil menghapus video');
    }
}
