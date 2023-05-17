@extends('layouts.template', ['title' => 'article'])
@section('content')
    @push('custom_css')
        <style>
            h1 {
                font-weight: bold;
            }

            table {
                table-layout: fixed;
            }

            .col-no {
                width: 55px;
            }

            td:nth-child(4) {
                width: 150px;
                /* Ubah lebar sesuai kebutuhan Anda */
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        </style>
    @endpush
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Artikel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Daftar Artikel 📰</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <a href="{{ url('articles/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                    <a href="{{ url('/article/cetak_pdf') }}"" class="btn btn-sm btn-info my-2">Cetak PDF</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="col-no">No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Isi</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Tahun Terbit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($articles->count() > 0)
                                @foreach ($articles as $i => $a)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $a->judul }}</td>
                                        <td>{{ $a->penulis }}</td>
                                        <td>{{ $a->content }}</td>
                                        <td><img src="{{ asset('storage/' . $a->featured_image) }}" width="105px"></td>
                                        <td>{{ $a->kategori }}</td>
                                        <td>{{ $a->tahun_terbit }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <div class="row justify-content-center">

                                                <a href="{{ url('/articles/' . $a->id . '/edit') }}"
                                                    class="btn btn-sm btn-warning mr-2">Edit</a>

                                                <form method="POST" action="{{ url('/articles/' . $a->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Pemrograman Web Lanjut
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('custom_js')
    <script></script>
@endpush
