<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include '../koneksi/koneksi.php';
        include '../header.php';
    ?>
    <style>
        a{ text-decoration: none;}
        b{ font-size: 30px; color: black;}
    </style>
</head>
<body>

<a href="../form_barang.php"><img src="../html/img/back.png" width="20px"><b>Kembali</b></a>
<?php

    if(isset($_POST['show'])){
        
    // query sql
    $show=mysqli_query($koneksi,"SELECT * FROM stok") or die(mysqli_error($show));

    if(mysqli_num_rows($show)){
        echo"<table border=5 class='table table-bordered'>
            <thead class='thead-dark'>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                    <th>Keterangan</th>
                </tr>
            </thead>";
        while($row=mysqli_fetch_assoc($show)){
        echo"
            <tbody>
                <tr>
                    <td>" .$row['Nama_barang']."</td>
                    <td>" .$row['Harga_barang']. "</td>
                    <td>" .$row['Stok_barang']. "</td>
                    <td>" .$row['keterangan']."</td>
                </tr>
            </tbody>";
        }
        echo"</table>";
    }else{
        echo"Data tidak ditemukan";
    }
}
?>    
<?php
    include '../footer.php';
?>
</body>
</html>
