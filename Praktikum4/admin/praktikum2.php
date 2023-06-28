<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>
  <div class="container">
        <h2>Form Input Nilai Mahasiswa</h2>
    </div>
<form action="form_hasil.php" method="GET">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan Nama" type="nama" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Matkul</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="UI/UX">UI/UX</option>
        <option value="PemWeb">PemWeb</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="text3" name="tugas" placeholder="Masukan Nilai Tigas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="text" name="uts" placeholder="Masukan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text2" name="uas" placeholder="Masukan Nilai UAS" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<div class="container">
        <table class="table table-bordered text-uppercase">
        <tr class="table-danger">
            <th>nama</th>
            <th>mata kuliah</th>
            <th>nilai tugas</th>
            <th>nilai uts</th>
            <th>nilai uas</th>
            <th>total nilai</th>
            <th>keterangan</th>
        </tr>
        <?php require_once "proses_nilai.php"; ?>
        <tr>
            <td><?= $nama; ?></td>
            <td><?= $matkul; ?></td>
            <td><?= $tugas; ?></td>
            <td><?= $uts; ?></td>
            <td><?= $uas; ?></td>
            <td><?= number_format($total_nilai, 1); ?></td>
            <td><?= $keterangan; ?></td>
        </tr>
        </table>
    </div>

    <?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$tugas = $_GET['tugas'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$total_nilai = ($tugas + $uts + $uas) / 3;

if($total_nilai > 75){
    $keterangan = "LULUS";
}

else {
    $keterangan = "TIDAK LULUS";
}
?>
<?php require_once "layouts/footer.php"; ?>