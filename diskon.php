<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discounter</title>
    <?php
    include"header.php";
    include'koneksi/koneksi.php';
    ?>
</head>
<body>
<div class="container">
        <h2 class="text-center">Input Stok Barang</h2><br>
            <form action="proses/proses_input.php" method="POST">
            <div class="form-group w-75">
                <label>Masukkan Nama Barang</label><br>
                <input type="text" class="form-control" name="barang">
            </div>
            <div class="form-group w-75">
                <label>Masukkan Harga</label><br>
                <input type="number" class="form-control" name="harga">
            </div>
            <div class="form-group w-75">
                <label>Masukkan Stok</label><br>
                <input type="number" class="form-control" name="stok">
            </div>
            <div class="form-group w-75">
                <label>Masukkan Kategori</label><br>
                <input type="text" class="form-control" name="kategori">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Masukkan">
            </form>
            <form action="proses/proses_muncul.php" method="POST">
            <input type="submit" class="btn btn-primary" name="show" value="Munculkan Barang">
            </form>

<?php
    if(isset($_POST['show'])){
    $barang=$_POST['barang'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $kategor=$_POST['kategori'];
    $diskon=20/100;

    $tampil=mysqli_query($koneksi,"") or die(mysqli_error($tampil));

    if($harga>=400000){
        $harga_diskon=$harga-($harga*$diskon);
        echo"<br>$barang";
        echo" dengan harga awal Rp. $harga";
        echo" dan diskon sebesar $diskon% berjumlah sebesar ";
        echo"Rp. $harga_diskon";

    }else{
        echo"<br>Harga $barang tidak lebih dari Rp. 400.000.";
        echo" $barang tidak mendapatkan diskon";
    }
}
?>

    </div>
    <?php
    include"footer.php";
    ?>
</body>
</html>

