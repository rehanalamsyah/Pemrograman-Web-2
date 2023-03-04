<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Belanja Online</title>
</head>
<body>
    <header>
        <h1 class="mx-3">Belanja Online</h1>
        <hr>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-6">

                <form method="POST" action="belanja.php" class="container mt-5">
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Customer</label>
                        <div class="col-sm-8">
                            <div>
                                <input type="text" name="customer" class="form-control" placeholder="Nama Customer">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Pilih Produk</label>
                            <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Tv" name="produk">
                                <label class="form-check-label" for="inlineCheckbox1">TV</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Kulkas" name="produk">
                                <label class="form-check-label" for="inlineCheckbox2">KULKAS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Mesin Cuci" name="produk">
                                <label class="form-check-label" for="inlineCheckbox3">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-8">
                            <div>
                                <input type="number" class="form-control" name="jumlah" id="" placeholder="Jumlah">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-2 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-6 mt-5">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV : Rp. 4.200.000</li>
                    <li class="list-group-item">Kulkas : Rp. 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>