<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discounter</title>
    <?php
    include"header.php";
    ?>
</head>
<body>
    <div class="container">
    <h2>Discount Counter</h2><br>
        <form action="" method="POST" name="input">
        <div class="form-group w-75">
            <label>Masukkan nama barang</label><br>
            <input type="text" class="form-control" name="barang">
        </div>
        <div class="form-group w-75">
            <label>Masukkan harga</label><br>
            <input type="number" class="form-control" name="harga">
        </div>
        <div class="form-group w-75">
        <label>Masukkan diskon</label><br>
        <input type="number" class="form-control" name="diskon">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Hitung">
        </form>

<?php
    if(isset($_POST['submit'])){
    $barang=$_POST['barang'];
    $harga=$_POST['harga'];
    $diskon=$_POST['diskon'];

    if($harga>=400000){
        $harga_diskon=$harga-($harga*$diskon/100);
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

