<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include"header.php";
    include"koneksi/koneksi.php";
    ?>
</head>
<body>
    <div class="container">
        <h2 class="card-header text-center bg-success">Input Stok Barang</h2><br>
        <div class="card-body bg-secondary text-light">
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
            <div class="form-row">
                <div class="form-group col-md-1">
                <input type="submit" class="btn btn-primary" name="submit" value="Masukkan">
                </div>
            </form>
            <form action="proses/proses_muncul.php" method="POST">
                <div class="form-group col-md-1">
                <input type="submit" class="btn btn-success" name="show" value="Munculkan Barang">
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php
    include"footer.php";
    ?>
</body>
</html>