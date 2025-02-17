<?php 
    $domisili = ["Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi", "lainnya"];

    $program_studi = [
        "SI" => "Sistem Informasi",
        "TI" => "Teknik Informatika",
        "BD" => "Bisnis Digital"
    ];

    $skills = [
        "HTML"=>10,
        "CSS"=>10, 
        "JavaScrip"=>20,
        "RWD Bootstrap"=>20, 
        "PHP"=>30, 
        "Python"=>30, 
        "JAVA"=>50
    ];
    
     //menentukan range skill
     function cekRange ($skor) {
        if ($skor == 0){
            return "Tidak Memadai";
        } 
        if ($skor >= 0 && $skor <= 40){
            return "Kurang";
        }
        if ($skor >= 40 && $skor <= 60){
            return "Cukup";
        }
        if ($skor >= 60 && $skor <= 100){
            return "Baik";
        }
        if ($skor >= 100 && $skor >= 150){
            return "Sangat Baik";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<fieldset class="form-group" style="background-color: #8FBC8F;">
    <div class="container">
        <h2>Form Registrasi IT Club GDSC</h2>

         <form method="POST">

         <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
                    <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
                    <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select" required="required">
                    <?php foreach($domisili as $dom){ ?>
                    <option value="<?= $dom; ?>"><?= $dom; ?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                <select id="program_studi" name="program_studi" class="custom-select" required="required">
                    <?php foreach($program_studi as $key => $value) { ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Programming</label> 
                <div class="col-8">
                    <?php foreach($skills as $key => $skor){ ?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="<?= $key ?>" type="checkbox" class="custom-control-input" value="<?= $key ?>" > 
                            <label for="<?= $key ?>" class="custom-control-label"><?= $key; ?></label>
                        </div>
                        <?php } ?>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-warning">Submit</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <tr class= "table-warning text-uppercase">
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Domisili</th>
                <th>Program Studi</th>
                <th>Skill Programming</th>
                <th>Skor Skill</th>
                <th>Kategori Skill</th>
            </tr>
            <?php 
            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $nim = $_POST['nim'];
                $email = $_POST['email'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $domisili = $_POST['domisili'];
                $program_studi = $_POST['program_studi'];
                $skills = $_POST['skill'];
                $skor = 0;
                //buat logika menentukan skor dari skill
                foreach ($skills as $skill) {
                    switch($skill) {
                        case 'HTML' :
                            $skor += 10;
                            break;
                        case 'CSS' :
                            $skor += 10;
                            break;
                        case 'JavaScrip' :
                            $skor += 20;
                            break;
                        case 'RWD Bootstrap' :
                            $skor += 20;
                            break;
                        case 'PHP' :
                            $skor += 30;
                            break;
                        case 'Python' :
                            $skor += 30;
                            break;
                        case 'JAVA' :
                            $skor += 50;
                            break;
                    };
                };
                $kategori_skill = cekRange($skor);
            ?>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $nim; ?></td>
                <td><?= $email; ?></td>
                <td><?= $jenis_kelamin; ?></td>
                <td><?= $domisili; ?></td>
                <td><?= $program_studi; ?></td>
                <td>
                    <?php foreach($skills as $skill){
                    echo $skill, ","; } ?>
                </td>
                <td><?= $skor; ?></td>
                <td><?= $kategori_skill; ?></td>
            </tr>
                <?php } ?>
        </table>
    </div>
</body>
</html>