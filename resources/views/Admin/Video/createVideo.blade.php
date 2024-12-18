@extends('template.index')

@section('title', 'Form Input Video')

@section('style')
<!-- Summernote -->
<link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Video</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index.video') }}">Home</a></li>
              <li class="breadcrumb-item active">Form Input</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Form start -->
            <div class="card card-primary">
              <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <!-- Judul Video -->
                  <div class="form-group">
                    <label for="judul">Judul Video</label>
                    <input type="text" name="judul" id="judul" 
                      class="form-control @error('judul') is-invalid @enderror" 
                      value="{{ old('judul') }}" required placeholder="Masukkan Judul Video">
                    @error('judul')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <!-- Kategori Video -->
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori_id" id="kategori" 
                      class="form-control @error('kategori_id') is-invalid @enderror" required>
                      <option value="">Pilih Kategori</option>
                      @foreach($kategori as $cat)
                        <option value="{{ $cat->id }}" 
                          {{ old('kategori_id') == $cat->id ? 'selected' : '' }}>
                          {{ $cat->nama_kategori }}
                        </option>
                      @endforeach
                    </select>
                    @error('kategori_id')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <!-- File Video -->
                  <div class="form-group">
                    <label for="file_video">Upload Video</label>
                    <input type="file" name="file_video" id="file_video" 
                      class="form-control @error('file_video') is-invalid @enderror" required>
                    @error('file_video')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <!-- URL Video -->
                  <div class="form-group">
                    <label for="url_video">URL Video (Opsional)</label>
                    <input type="url" name="url_video" id="url_video" 
                      class="form-control @error('url_video') is-invalid @enderror" 
                      value="{{ old('url_video') }}" placeholder="Masukkan URL Video jika tersedia">
                    @error('url_video')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <!-- Deskripsi Video -->
                  <div class="form-group">
                    <label for="summernote">Deskripsi Video</label>
                    <textarea name="deskripsi" id="summernote" 
                      class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Video</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection

@section('script')
<!-- Summernote -->
<script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endsection
