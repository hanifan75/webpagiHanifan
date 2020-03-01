<?php

    include '../koneksi/koneksi.php';
    session_start();

    if(isset($_POST['input'])){
        $id=uniqid();
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $jurusan=$_POST['jurusan'];
        $matkul=$_POST['matkul'];
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

        $input_mahasiswa=mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES (md5('$id'),'$nim','$nama', '$jurusan','$matkul' ,'$nilaihari','$nilaiquiz','$nilaiuts','$nilaiuas','$nilai_akhir','$grade')") or die(mysqli_error($input_mahasiswa));

        if($input_mahasiswa){
            echo"<script>
                alert('Data berhasil Diinput');
                window.location.href='../form_mahasiswa.php';
                </script>";
        }else{
            echo"<script>
                alert('Data tidak berhasil diinput, coba lagi');
                window.location.href='../form_mahasiswa.php'
                </script>";
        }
    }

?>