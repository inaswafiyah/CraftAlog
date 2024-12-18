@extends('template.index')

@section('title', 'Dashboard Video')

@section('style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endsection

@section('main')
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Video</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Video</li>
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
                            <div class="d-flex justify-content-end align-items-center mb-3">
                                <a href="{{ route('video.create') }}" class="btn btn-primary">+ Tambah Video</a>
                            </div>

                            <!-- Alert -->
                            @if (Session::has('Sukses'))
                            <div class="alert alert-success">
                                {{ Session::get('Sukses') }}
                                <button class="close" type="button" data-dismiss="alert">&times;</button>
                            </div>
                            @endif
                            @if (Session::has('Delete'))
                            <div class="alert alert-danger">
                                {{ Session::get('Delete') }}
                                <button class="close" type="button" data-dismiss="alert">&times;</button>
                            </div>
                            @endif

                            <!-- Table -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Video</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $video)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $video->judul }}</td>
                                        <td>{!! strip_tags($video->deskripsi) !!}</td>
                                        <td>{{ $video->kategori->nama_kategori }}</td>
                                        <td><a href="{{ $video->url }}" target="_blank">Lihat Video</a></td>
                                        <td>
                                            <a href="{{ route('video.edit', $video->id) }}" class="btn btn-secondary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#hapus{{ $video->id }}" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            @include('video.modalHapus')
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        });
    });
</script>
@endsection
