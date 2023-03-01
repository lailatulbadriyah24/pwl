@extends('layouts.template',["title" => "college"])
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengalaman Kuliah</h1>
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
        <div class="card  card-primary">
            <div class="card-header">
                <h3 class="card-title">Pengalaman Kuliah</h3>

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
                Saya merupakan mahasiswa semester 4 di Politeknik Negeri Malang dengan jurusan Teknik Informatika.
                Selama menjadi mahasiswa di Politeknik Negeri Malang saya beberapa kali mengikuti lomba dan menang, contohnya
                lomba PKM dengan kategori PKM-GT dan PKM-PI, saya juga mengikuti lomba Bisnis TIK yang diadakan oleh
                JTI Polinema. Selain itu saya juga mengikuti sertifikasi Junior Web Developer. Saya memiliki banyak Pengalaman
                di Politeknik Negeri Malang dan itu sangat berkesan bagi saya 🙌
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                College
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection