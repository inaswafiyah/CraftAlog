@extends('template.index')

@section('title', 'Form Update Produk')

@section('style')
<!-- summernote -->
<link rel="stylesheet" href="{{asset('template/plugins/summernote/summernote-bs4.min.css')}}">
<!-- CodeMirror -->
<link rel="stylesheet" href="{{asset('template/plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('template/plugins/codemirror/theme/monokai.css')}}">
@endsection

@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Update Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('index.produk')}}">Home</a></li>
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
                    <form action="{{ route('update.produk', $produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Judul Produk</label>
                                <input type="text" 
                                       name="judul" 
                                       class="form-control @error('judul') is-invalid @enderror"
                                       value="{{ old('judul', $produk->judul) }}" 
                                       required 
                                       placeholder="Masukkan Judul Produk">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="categori_id" class="form-control @error('categori_id') is-invalid @enderror" required>
                                    <option value="" disabled>Pilih Kategori</option>
                                    @foreach ($kategori as $pia)
                                        <option value="{{ $pia->id }}" {{ $produk->categori_id == $pia->id ? 'selected' : '' }}>
                                            {{ $pia->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('categori_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Image Produk</label>
                                <input type="file" 
                                       name="image" 
                                       class="form-control @error('image') is-invalid @enderror">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar</small>
                                @if($produk->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $produk->image) }}" alt="Image Produk" style="width: 200px;">
                                    </div>
                                @endif
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Produk</label>
                                <textarea name="deskripsi" 
                                          id="summernote" 
                                          class="form-control @error('deskripsi') is-invalid @enderror" 
                                          required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- CodeMirror -->
<script src="{{asset('template/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('template/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('template/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('template/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- Page specific script -->
<script>
    $(function() {
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