<?php
// error_reporting(0);
if(isset($_POST['input'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $alamat=$_POST['alamat'];
    $tanggal=$_POST['tanggal'];
    $tempat=$_POST['tempat'];
    $nohp=$_POST['nohp'];
    $hobi1=$_POST['h1'];
    $hobi2=$_POST['h2'];
    $hobi3=$_POST['h3'];
    $hobi4=$_POST['h4'];

    echo"Nama : <b>$nama</b><br>";
    echo"E-mail : $email<br>";
    echo"Jenis Kelamin : $gender<br>";
    echo"Alamat : $alamat<br>";
    echo"Tanggal Lahir : $tanggal<br>";
    echo"No. HP : $nohp<br>";
    echo"Hobi : $hobi1 $hobi2 $hobi3 $hobi4";
}
?>