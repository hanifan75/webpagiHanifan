<?php

include'../koneksi/koneksi.php';



    if(isset($_POST['submit'])){
        $id=uniqid();
        $barang=$_POST['barang'];
        $harga=$_POST['harga'];
        $stok=$_POST['stok'];
        $kategori=$_POST['kategori'];

    // query sql
    $input=mysqli_query($koneksi,"INSERT INTO stok VALUES (md5('$id'), '$barang', '$harga', '$stok', '$kategori')") or die(mysqli_error($input));

    if($input){
        echo"<script>
            alert('Barang Berhasil Diinput');
            window.location.href='../form_barang.php';
            </script>";
    }
 
    
}
?>