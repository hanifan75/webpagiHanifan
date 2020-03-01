<?php

    include '../koneksi/koneksi.php';
    session_start();
    
    if(isset($_GET['id_mahasiswa'])){

        $id=$_GET['id_mahasiswa'];

        $hapus=mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id_mahasiswa='$id'")or die(mysqli_error($hapus));

        if($hapus){
            echo"<script>
                    alert('Data berhasil dihapus');
                    window.location.href='proses_tampil_mahasiswa.php';
                </script>";
        }else{
            echo"<script>
                alert('Data Gagal dihapus');
                window.location.href='proses_tampil_mahasiswa.php';
                </script>";
        }

    }



