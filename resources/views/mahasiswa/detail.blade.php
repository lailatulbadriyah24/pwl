@extends('layouts.template', ['title' => 'mahasiswa'])
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
                        <h1>Mahasiswa</h1>
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

            @if (session()->has("success"))
                <div class="alert alert-success">
                    {{ session("success")}}
                </div>
            @endif
            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detail Mahasiswa 👩‍🎓</h3>

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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center"><img width="180px" src="{{ asset('storage/' . $mahasiswa->foto) }}"></li>
                        <li class="list-group-item"><b>Nim: </b>{{$mahasiswa->nim}}</li>
                        <li class="list-group-item"><b>Nama: </b>{{$mahasiswa->nama}}</li>
                        <li class="list-group-item"><b>Kelas: </b>{{$mahasiswa->kelas->nama_kelas}}</li>
                        <li class="list-group-item"><b>Jenis Kelamin: </b>{{$mahasiswa->jk}}</li>
                        <li class="list-group-item"><b>Tempat Lahir: </b>{{$mahasiswa->tempat_lahir}}</li>
                        <li class="list-group-item"><b>Tanggal Lahir: </b>{{$mahasiswa->tanggal_lahir}}</li>
                        <li class="list-group-item"><b>Alamat: </b>{{$mahasiswa->alamat}}</li>
                        <li class="list-group-item"><b>No HP: </b>{{$mahasiswa->hp}}</li>
                    </ul>
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
