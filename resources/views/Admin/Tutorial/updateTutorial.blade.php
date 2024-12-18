@extends('template.index')

@section('title', 'Form Update Tutorial')

@section('style')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Update Tutorial</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('index.tutorial') }}">Home</a></li>
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
                        <form action="{{ route('tutorial.update', $tutorial->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="produk_id">Produk</label>
                                    <select name="produk_id"
                                        class="form-control @error('produk_id') is-invalid @enderror" required>
                                        <option value="" disabled>Pilih Produk</option>
                                        @foreach ($produk as $pia)
                                        <option value="{{ $pia->id }}"
                                            {{ old('produk_id', $tutorial->produk_id) == $pia->id ? 'selected' : '' }}>
                                            {{ $pia->judul }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('produk_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Langkah</label>
                                    <textarea name="langkah" id="summernote-langkah"
                                        class="form-control @error('langkah') is-invalid @enderror"
                                        required>{{ old('langkah', $tutorial->langkah) }}</textarea>
                                    @error('langkah')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Bahan</label>
                                    <textarea name="bahan" id="summernote-bahan"
                                        class="form-control @error('bahan') is-invalid @enderror"
                                        required>{{ old('bahan', $tutorial->bahan) }}</textarea>
                                    @error('bahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" id="summernote-deskripsi"
                                        class="form-control @error('deskripsi') is-invalid @enderror"
                                        required>{{ old('deskripsi', $tutorial->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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
<!-- summernote -->
<script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
     $(function() {
        // Summernote untuk masing-masing textarea
        $('#summernote-langkah').summernote();
        $('#summernote-bahan').summernote();
        $('#summernote-deskripsi').summernote();
    });

</script>
@endsection
