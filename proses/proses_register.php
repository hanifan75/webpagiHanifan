<?php

include '../koneksi/koneksi.php';
session_start();


if($_POST['pass']==$_POST['conpass']){
    if(isset($_POST['register'])){
        $id=uniqid();
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $fullname=$_POST['fullname'];
        $level=$_POST['level'];

    // query sql
    $regis=mysqli_query($koneksi,"INSERT INTO user VALUES (md5('$id'), '$user', md5('$pass'), '$email', '$fullname', '$level')") or die(mysqli_error($regis));

    if($regis){
        echo"<script>
            alert('Data Berhasil Diinput, Silahkan Login');
            window.location.href='../login_animasi.php';
            </script>";
        }else{
        echo"<script>
            alert('Data Tidak Berhasil Diinput, Silahkan Coba Lagi');
            window.location.href='../login_animasi.php';
            </script>";
        }
    }
}else{
    echo"<script>
        alert('Password Tidak Sama, Silahkan Register Kembali');
        window.location.href='../login_animasi.php';
        </script>";
}
?>