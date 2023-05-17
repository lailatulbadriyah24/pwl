<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table tr td,
        table tr th {
            border: 1px solid black;
            padding: 8px;
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Artikel</h4>
    </center>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->judul }}</td>
                    <td>{{ $a->penulis }}</td>
                    <td>{{ $a->content }}</td>
                    <td><img src="{{ public_path('storage/' . $a->featured_image) }}" width="150px"></td>
                    <td>{{ $a->kategori }}</td>
                    <td>{{ $a->tahun_terbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
