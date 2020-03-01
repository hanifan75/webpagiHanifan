<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include 'header.php';
        include 'koneksi/koneksi.php';
        session_start();
    ?>
</head>
<body>

<div class="container">
        <h2 class="card-header text-center bg-warning text-light">Form Input Data Mahasiswa</h2>
        <form action="proses/proses_mahasiswa.php" method="POST" name="input">
            <div class="card-body bg-secondary text-light">
        <div class="form-group">
            <label>NIM</label><br>
            <input type="number" class="form-control" name="nim">
        </div>
        <div class="form-group">
            <label>Nama</label><br>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Jurusan</label><br>
            <input type="text" class="form-control" name="jurusan">
        </div>
        <div class="form-group">
            <label>Mata Kuliah</label><br>
            <input type="text" class="form-control" name="matkul">
        </div>

        <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Nilai Harian</label><br>
                    <input type="number" class="form-control" name="nilaihari">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai Quiz</label><br>
                    <input type="number" class="form-control" name="nilaiquiz">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai UTS</label><br>
                    <input type="number" class="form-control" name="nilaiuts">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai UAS</label><br>
                    <input type="number" class="form-control" name="nilaiuas">
                </div>
        </div>
            <div class="form-row">
            <div class="form-group col-md-0.5">
            <input type="submit" class="btn btn-info" name="input" value="Kirim">
            </div>
            <div class="form-group col-md-9">
            <input type="reset" class="btn btn-danger" name="reset" value="Reset">
            </div>
            </form>

            <form method="POST" action="proses/proses_tampil_mahasiswa.php">
                <div class="form-group col-md-0">
                <input type="submit" class="btn btn-success" name="show" value="Tampilkan Data"> 
                </div>   
            </form>
            </div>
        </div>




    <?php
        include 'footer.php';
    ?>
</body>
</html>