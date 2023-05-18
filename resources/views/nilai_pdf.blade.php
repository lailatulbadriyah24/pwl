<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Hasil Studi - {{ $mahasiswa->nama }}</title>

    {{-- <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ public_path('css/adminlte.min.css') }}">

    <style>
        .text-center {
            text-align: center;
        }

        .biodata-table {
            margin-bottom: 2rem;
        }

        .biodata-table th {
            text-align: left;
        }

        .table-bordered {
            border-collapse: collapse;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h3 class="text-center" style="margin-top: 20px;">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h3>
    <h2 class="mt-4 mb-3 text-center">KARTU HASIL STUDI (KHS)</h2>
    <div class="container">
        <table class="biodata-table">
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>NIM </th>
                <th>:</th>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Kelas </th>
                <th>:</th>
                <td>{{ $mahasiswa->kelas->nama_kelas }}</td>
            </tr>
        </table>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td><b>Mata Kuliah</b></td>
                    <td><b>SKS</b></td>
                    <td><b>Semester</b></td>
                    <td><b>Nilai</b></td>
                </tr>
            </thead>
            <tbody>
                @if ($mahasiswa->matakuliahs->count() > 0)
                    @foreach ($mahasiswa->matakuliahs as $matakuliah)
                        <tr>
                            <td>{{ $matakuliah->nama_matkul }}</td>
                            <td>{{ $matakuliah->sks }}</td>
                            <td>{{ $matakuliah->semester }}</td>
                            <td>{{ $matakuliah->pivot->nilai }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">Data Tidak Ada</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>

</html>
