<?php

    include '../koneksi/koneksi.php';
    session_start();
    
    if(isset($_GET['id_biodata'])){

        $id=$_GET['id_biodata'];

        $hapus=mysqli_query($koneksi,"DELETE FROM biodata WHERE id_biodata='$id'")or die(mysqli_error($hapus));

        if($hapus){
            echo"<script>
                    alert('Data berhasil dihapus');
                    window.location.href='../admin/tabel_biodata.php';
                </script>";
        }else{
            echo"<script>
                alert('Data Gagal dihapus');
                window.location.href='../admin/tabel_biodata.php';
                </script>";
        }

    }