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
                        <h1>Keluarga</h1>
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
                    <h3 class="card-title">Tambah Data Keluarga 👨‍👩‍👧</h3>

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

                    <form method="POST" action="{{ $url_form }}"> 
                        @csrf
                        {!! (isset($kel))? method_field('PUT') : ""!!}
                        
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($kel)? $kel->nama : old('nama') }}" name="nama" type="text" /> 
                            @error('nama')
                            <span class="error invalid-feedback">{{ $message }} </span> 
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Hubungan</label>
                            <input class="form-control @error('hubungan') is-invalid @enderror" value="{{ isset($kel)? $kel->hubungan : old('hubungan') }}" name="hubungan" type="text"/> 
                            @error('hubungan')
                            <span class="error invalid-feedback">{{ $message }} </span> 
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ isset($kel)? $kel->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir" type="date" /> 
                            @error('tanggal_lahir')
                            <span class="error invalid-feedback">{{ $message }} </span> 
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Jenis Kelamin</label>
                            <input class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ isset($kel)? $kel->jenis_kelamin : old('jenis_kelamin') }}" name="jenis_kelamin" type="text"/> 
                            @error('jenis_kelamin')
                            <span class="error invalid-feedback">{{ $message }} </span> 
                            @enderror
                            </div>
                        <div class="col form-group">
                            <label>Pekerjaan</label>
                            <input class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ isset($kel)? $kel->pekerjaan : old('pekerjaan') }}" name="pekerjaan" type="text"/> 
                            @error('pekerjaan')
                            <span class="error invalid-feedback">{{ $message }} </span> 
                            @enderror
                            </div>
                            <div class="col form-group">
                            <label>Alamat</label>
                            <input class="form-control @error('alamat') is-invalid @enderror" value="{{ isset($kel)? $kel->alamat : old('alamat') }}" name="alamat" type="text"/> 
                            @error('alamat')
                            <span class="error invalid-feedback">{{ $message }} </span> 
                            @enderror
                            </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="#" class="btn btn-warning" onclick="history.back()">Kembali</a>
                <!-- /.card-body -->

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
