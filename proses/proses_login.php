<?php

include'../koneksi/koneksi.php';

    if(isset($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];

    // query sql
    $login=mysqli_query($koneksi,"SELECT * FROM user WHERE nama_user='$user' AND pass_user='$pass'");

    // pengecekan data
    $cek=mysqli_num_rows($login);
    // menampilkan definisi data
    $data=mysqli_fetch_assoc($login);

    if($cek>0){
        if($data['level']=="penjual"){
            $_SESSION['nama_user']=$data['nama_user'];
            $_SESSION['level']=$data['level'];
            $_SESSION['status']='login';

            echo"<script>
            alert('Welcome Back Admin');
            window.location.href='../form_nilai.php';
            </script>";
        }else if($data['level']=="pembeli"){
            $_SESSION['nama_user']=$data['nama_user'];
            $_SESSION['level']=$data['level'];
            $_SESSION['status']='login';

            echo"<script>
            alert('Selamat Datang $user');
            window.location.href='../diskon.php';
            </script>";
        }
    }else{
        echo "Username atau Password salah";
    }

        // if($user=="admin" && $pass=="admin123"){
        //     // redirect menggunakan window location
        //     echo"<script>
        //             alert('Login berhasil');
        //             window.location.href='../form_nilai.php';
        //         </script>";
        // }else if($user=="siswa" && $pass=="siswa123"){
        //     // redirect menggunakan header
        //     header('location: diskon.php');
        // }else{
        //     echo"<script>
        //             alert('Username atau password salah');
        //         </script>";
        // }
    }
    ?>