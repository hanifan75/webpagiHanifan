<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $nim="1308107010005";
    $nama="M. Hanifan Luthfi";
    $jurusan="Informatika";
    $nilai="";

    echo"Nama : $nama <br>";
    echo"NIM : $nim <br>";
    echo"Jurusan : $jurusan <br>";

    // if($nilai==NULL){
    //     echo"Input error";
    // }
    // else if($nilai<=50){
    //     echo"Nilai anda adalah: E";
    // }else if($nilai<=65){
    //     echo"Nilai anda adalah: D";
    // }else if($nilai<=72){
    //     echo"Nilai anda adalah: C";
    // }else if($nilai<=83){
    //     echo"Nilai anda adalah: B";
    // }else if($nilai>83 && $nilai<=100){
    //     echo"Nilai anda adalah: A";
    // }else{
    //     echo"Input error";
    // }


    ?>
<!-- memakai koefisien pada variabel -->
    <?php
        $harian=0.1;
        $quiz=0.15;
        $uas=0.4;
        $uts=0.35;

        $nilai_h=80;
        $nilai_q=100;
        $nilai_ua=50;
        $nilai_ut=60;
        $nilai_akhir=(($harian*$nilai_h)+($quiz*$nilai_q)+($uas*$nilai_ua)+($uts*$nilai_ut));

        echo"Nilai akhir adalah $nilai_akhir<br>";
        if($nilai_akhir<=50){
            echo"Nilai anda adalah: E";
        }else if($nilai_akhir<=65){
            echo"Nilai anda adalah: D";
        }else if($nilai_akhir<=72){
            echo"Nilai anda adalah: C";
        }else if($nilai_akhir<=83){
            echo"Nilai anda adalah: B";
        }else if($nilai_akhir>83 && $nilai_akhir<=100){
            echo"Nilai anda adalah: A";
        }else{
            echo"Input error";
        }

    ?>
    <br>
<!-- memakai nilai pada variabel -->
<?php
        $harian=80;
        $quiz=100;
        $uas=50;
        $uts=60;
        $nilai_akhir=(($harian*10/100)+($quiz*15/100)+($uas*40/100)+($uts*35/100));

        echo"Nilai akhir adalah $nilai_akhir<br>";
        if($nilai_akhir<=50){
            echo"Nilai anda adalah: E";
        }else if($nilai_akhir<=65){
            echo"Nilai anda adalah: D";
        }else if($nilai_akhir<=72){
            echo"Nilai anda adalah: C";
        }else if($nilai_akhir<=83){
            echo"Nilai anda adalah: B";
        }else if($nilai_akhir>83 && $nilai_akhir<=100){
            echo"Nilai anda adalah: A";
        }else{
            echo"Input error";
        }

    ?>
</body>
</html>