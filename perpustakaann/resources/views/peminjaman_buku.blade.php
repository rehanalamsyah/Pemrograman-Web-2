<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form - Peminjaman Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Peminjaman Buku Perpustakaan</h3><br>
                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif 
                        <!-- form validasi -->
                        <form action="{{ url('hasil-pinjam') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama"><b>Nama</b></label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group row">
                                <label class="col-4"><b>Jenis Kelamin</b></label>
                                <div class="col-4">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio"
                                            class="custom-control-input" value="Laki-Laki">
                                        <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio"
                                            class="custom-control-input" value="Perempuan">
                                        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lokasi"><b>Tanggal Pinjam</b></label>
                                <input class="form-control" type="date" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}">
                            </div>
                            <div class="form-group">
                                <label for="tema_buku"><b>Tema Buku</b></label>
                                <div class="form-group">
                                    <select id="select" name="tema_buku" class="select form-control">
                                        <option value="Fiksi">Fiksi</option>
                                        <option value="Horror">Horror</option>
                                        <option value="Petualangan">Petualangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group-col">
                                <label for="no_isbn"><b>No ISBN</b></label>
                                <input class="form-control" type="number" name="no_isbn" value="{{ old('no_isbn') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>