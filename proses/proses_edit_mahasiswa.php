<?php

    include '../koneksi/koneksi.php';
    session_start();

    if(isset($_GET['update'])){
        $id=$_GET['id'];
        $nim=$_GET['nim'];
        $nama=$_GET['nama'];
        $jurusan=$_GET['jurusan'];
        $matkul=$_GET['matkul'];
        $nilaihari=$_GET['nilaihari'];
        $nilaiquiz=$_GET['nilaiquiz'];
        $nilaiuts=$_GET['nilaiuts'];
        $nilaiuas=$_GET['nilaiuas'];
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

        $update=mysqli_query($koneksi,"UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', mata_kuliah='$matkul',nilai_harian='$nilaihari', nilai_quiz='$nilaiquiz', nilai_uts='$nilaiuts', nilai_uas='$nilaiuas', nilai_akhir='$nilai_akhir', grade='$grade' WHERE id_mahasiswa='$id'") or die(mysqli_error($update));
    
        if($update){
            echo"<script>
                alert('Data berhasil diperbarui');
                window.location.href='proses_tampil_mahasiswa.php';
                </script>";
        }else{
            echo"<script>
                alert('Data gagal diperbarui');
                </script>";
        }
    
    }
?>