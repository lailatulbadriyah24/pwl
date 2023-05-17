@extends('layouts.template', ['title' => 'article'])
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
                    <h3 class="card-title">Edit Data Artikel 📰</h3>

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
                    <form action="/articles/{{ $article->id }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" required="required" name="judul"
                                value="{{ $article->judul }}"></br>
                        </div>
                        <div class="form-group">
                            <label for="title">Penulis</label>
                            <input type="text" class="form-control" required="required" name="penulis"
                                value="{{ $article->penulis }}"></br>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" class="form-control" required="required" name="content"
                                value="{{ $article->content }}"></br>
                        </div>
                        <div class="form-group">
                            <label for="image">Feature Image</label>
                            <input type="file" class="form-control" required="required" name="image"
                                value="{{ $article->featured_image }}"></br>
                            <img width="150px" src="{{ asset('storage/' . $article->featured_image) }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Kategori</label>
                            <input type="text" class="form-control" required="required" name="kategori"
                                value="{{ $article->kategori }}"></br>
                        </div>
                        <div class="form-group">
                            <label for="content">Tahun Terbit</label>
                            <input type="text" class="form-control" required="required" name="tahun_terbit"
                                value="{{ $article->tahun_terbit }}"></br>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
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
