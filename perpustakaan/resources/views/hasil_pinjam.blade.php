<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berhasil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table">
            <tr class="table-succsess">
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Pinjam</th>
                <th>Tema Buku</th>
                <th>No ISBN</th>
            </tr>
            <tr>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->jenis_kelamin}}</td>
                <td>{{ $data->tanggal_pinjam}}</td>
                <td>{{ $data->tema_buku}}</td>
                <td>{{ $data->no_isbn}}</td>
            </tr>
        </table>
    </div>
</body>
</html>