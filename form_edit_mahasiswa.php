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

    <?php
        $id=$_GET['id_mahasiswa'];
        
        $tampil_data=mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'") or die(mysqli_error($tampil_data));

        if(mysqli_num_rows($tampil_data)){
            $data=mysqli_fetch_assoc($tampil_data);
        }else{
            echo"<script>
                alert('Data tidak ada dalam Database');
                window.history.back();
                </script>";
        }
    ?>

<div class="container">
        <h2 class="card-header text-center bg-warning text-light">Form Edit Data Mahasiswa</h2>

        <form action="proses/proses_edit_mahasiswa.php" method="GET">

        <input type="text" hidden name="id" value="<?php echo $data['id_mahasiswa']?>">
            <div class="card-body bg-secondary text-light">
        <div class="form-group">
            <label>NIM</label><br>
            <input type="number" class="form-control" name="nim" value="<?php echo $data['nim']?>">
        </div>
        <div class="form-group">
            <label>Nama</label><br>
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']?>">
        </div>
        <div class="form-group">
            <label>Jurusan</label><br>
            <input type="text" class="form-control" name="jurusan" value="<?php echo $data['jurusan']?>">
        </div>
        <div class="form-group">
            <label>Mata Kuliah</label><br>
            <input type="text" class="form-control" name="matkul" value="<?php echo $data['mata_kuliah']?>">
        </div>

        <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Nilai Harian</label><br>
                    <input type="number" class="form-control" name="nilaihari" value="<?php echo $data['nilai_harian']?>">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai Quiz</label><br>
                    <input type="number" class="form-control" name="nilaiquiz" value="<?php echo $data['nilai_quiz']?>">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai UTS</label><br>
                    <input type="number" class="form-control" name="nilaiuts" value="<?php echo $data['nilai_uts']?>">
                </div>
                <div class="form-group col-md-3">
                    <label>Nilai UAS</label><br>
                    <input type="number" class="form-control" name="nilaiuas" value="<?php echo $data['nilai_uas']?>">
                </div>
        </div>
            <div class="form-row">
            <div class="form-group col-md-0.5">
            <input type="submit" class="btn btn-info" name="update" value="Perbarui">
            </div>
            <div class="form-group col-md-9">
            <input type="reset" class="btn btn-danger" name="reset" value="Reset">
            </div>
            </form>
            </div>
        </div>




    <?php
        include 'footer.php';
    ?>
</body>
</html>