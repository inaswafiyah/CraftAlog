@extends('template.index')

@section('title', 'Tambah Tutorial')

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
                    <h1>Tambah Tutorial</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('index.tutorial') }}">Tutorial</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('tutorial.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="produk_id">Produk Terkait</label>
                                    <select class="form-control" id="produk_id" name="produk_id">
                                        <option value="">Pilih Produk</option>
                                        @foreach ($produk as $pia)
                                        <option value="{{ $pia->id }}" {{ old('produk_id') == $pia->id ? 'selected' : '' }}>
                                            {{ $pia->judul }} 
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('produk_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="langkah">Langkah</label>
                                    <textarea class="form-control" id="langkah" name="langkah">{{ old('langkah') }}</textarea>
                                    @error('langkah')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="bahan">Bahan</label>
                                    <textarea class="form-control" id="bahan" name="bahan">{{ old('bahan') }}</textarea>
                                    @error('bahan')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan Tutorial</button>
                                </div>
                            </form>
                        </div>
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
    $(document).ready(function() {
        $('#langkah, #bahan, #deskripsi').summernote({
            height: 200,
        });
    });
</script>
@endsection