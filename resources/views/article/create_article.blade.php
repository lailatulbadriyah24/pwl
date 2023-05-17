@extends('layouts.template', ['title' => 'keluarga'])
@section('content')
    @push('custom_css')
        <style>
            h1 {
                font-weight: bold;
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

            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Artikel 📰</h3>

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
                    <form action="/articles" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul: </label>
                            <input type="text" class="form-control" required="required" name="judul"></br>
                            <label for="title">Penulis: </label>
                            <input type="text" class="form-control" required="required" name="penulis"></br>
                            <label for="content">Content: </label>
                            <textarea type="text" class="form-control" required="required" name="content"></textarea></br>
                            <label for="image">Feature Image: </label>
                            <input type="file" class="form-control" required="required" name="image"></br>
                            <label for="title">Kategori: </label>
                            <input type="text" class="form-control" required="required" name="kategori"></br>
                            <label for="title">Tahun Terbit: </label>
                            <input type="text" class="form-control" required="required" name="tahun_terbit"></br>
                            <button type="submit" name="submit"
                                class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
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
