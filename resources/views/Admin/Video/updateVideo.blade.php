@extends('template.index')

@section('title', 'Form Update Video')

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
                    <h1>Form Update Video</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('index.video') }}">Home</a></li>
                        <li class="breadcrumb-item active">Form Update</li>
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
                        <form action="{{ route('update.video', $video->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <!-- Judul Video -->
                                <div class="form-group">
                                    <label>Judul Video</label>
                                    <input type="text" 
                                           name="judul" 
                                           class="form-control @error('judul') is-invalid @enderror" 
                                           value="{{ old('judul', $video->judul) }}" 
                                           required 
                                           placeholder="Masukkan Judul Video">
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Kategori -->
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori_id" 
                                            class="form-control @error('kategori_id') is-invalid @enderror" required>
                                        <option value="" disabled>Pilih Kategori</option>
                                        @foreach($kategori as $cat)
                                            <option value="{{ $cat->id }}" {{ $video->kategori_id == $cat->id ? 'selected' : '' }}>
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
                                    <label>Upload Video</label>
                                    <input type="file" 
                                           name="file_video" 
                                           class="form-control @error('file_video') is-invalid @enderror">
                                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti file video</small>
                                    @if($video->file_video)
                                        <div class="mt-2">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('storage/' . $video->file_video) }}" type="video/mp4">
                                                Browser Anda tidak mendukung video ini.
                                            </video>
                                        </div>
                                    @endif
                                    @error('file_video')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- URL Video -->
                                <div class="form-group">
                                    <label>URL Video (Opsional)</label>
                                    <input type="url" 
                                           name="url_video" 
                                           class="form-control @error('url_video') is-invalid @enderror" 
                                           value="{{ old('url_video', $video->url_video) }}" 
                                           placeholder="Masukkan URL Video jika tersedia">
                                    @error('url_video')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Deskripsi Video -->
                                <div class="form-group">
                                    <label>Deskripsi Video</label>
                                    <textarea name="deskripsi" 
                                              id="summernote" 
                                              class="form-control @error('deskripsi') is-invalid @enderror" 
                                              required>{{ old('deskripsi', $video->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <!-- Submit Button -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Video</button>
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
        // Initialize Summernote
        $('#summernote').summernote();
    });
</script>
@endsection
