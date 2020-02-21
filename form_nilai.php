<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <?php
    include"header.php";
    ?>
<!-- <style>
        label{color:white;}
    </style> -->
    </head>
    <body>
        <div class="container">
        <h2 class="card-header text-center bg-primary">Form Biodata dan Nilai</h2>
        <form action="" method="POST" name="input">
            <div class="card-body bg-secondary text-light">
        <div class="form-group">
            <label>NIM</label><br>
            <input type="number" class="form-control" name="nim">
        </div>
        <div class="form-group">
            <label>Nama</label><br>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Jurusan</label><br>
            <input type="text" class="form-control" name="jurusan">
        </div>

        <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Nilai Harian</label><br>
                    <input type="number" class="form-control" name="nilaihari">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai Quiz</label><br>
                    <input type="number" class="form-control" name="nilaiquiz">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai UTS</label><br>
                    <input type="number" class="form-control" name="nilaiuts">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai UAS</label><br>
                    <input type="number" class="form-control" name="nilaiuas">
                </div>
        </div>

            <input type="submit" class="btn btn-info" name="input" value="Kirim">
            <input type="reset" class="btn btn-danger" name="reset" value="Reset">
        </div>
        </form>
        
        <br>

        <?php

        if(isset($_POST['input'])){

        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $jurusan=$_POST['jurusan'];
        $nilaihari=$_POST['nilaihari'];
        $nilaiquiz=$_POST['nilaiquiz'];
        $nilaiuts=$_POST['nilaiuts'];
        $nilaiuas=$_POST['nilaiuas'];
        $nilai_akhir=(($nilaihari*10/100)+($nilaiquiz*15/100)+($nilaiuts*35/100)+($nilaiuas*40/100));
        $grade;

        if($nilai_akhir<=50){
            $grade="E";
        }else if($nilai_akhir<=65){
            $grade="D";
        }else if($nilai_akhir<=72){
            $grade="C";
        }else if($nilai_akhir<=83){
            $grade="B";
        }else if($nilai_akhir>83 && $nilai_akhir<=100){
            $grade="A";
        }else{
            echo"Input error";
        }
        
        echo"<center>
            <table class='table table-bordered'>
            <thead class='thead-dark'>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$nim</td>
                    <td>$nama</td>
                    <td>$jurusan</td>
                    <td>$nilai_akhir</td>
                    <td>$grade</td>
                </tr>
            <tbody>
            </table>
            </center>";
    }

    

    // echo"NIM : $nim<br>";
    // echo"Nama : $nama<br>";
    // echo"Jurusan : $jurusan<br>";
    // echo"Nilai akhir : $nilai_akhir<br>";

//     if($nilai_akhir<=50){
//         echo"Nilai anda adalah: E";
//     }else if($nilai_akhir<=65){
//         echo"Nilai anda adalah: D";
//     }else if($nilai_akhir<=72){
//         echo"Nilai anda adalah: C";
//     }else if($nilai_akhir<=83){
//         echo"Nilai anda adalah: B";
//     }else if($nilai_akhir>83 && $nilai_akhir<=100){
//         echo"Nilai anda adalah: A";
//     }else{
//         echo"Input error";
//     }
// }
?>

    </div>
<?php
include"footer.php";    
?>
</body>
</html>