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

    echo"NIM : $nim<br>";
    echo"Nama : $nama<br>";
    echo"Jurusan : $jurusan<br>";
    echo"Nilai akhir : $nilai_akhir<br>";

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
}
?>