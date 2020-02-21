<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css grid -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css.map">
    <!-- css reboot -->
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css.map">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
</head>
<body>
    <div class="container">
    <h2>Form Biodata dan Nilai</h2>
    <FORM action="proses/proses_biodata.php" METHOD="POST" NAME="input">
    <div class="form-group w-75">
        Nama<input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group w-75">
        E-mail<input type="email" class="form-control" name="email">
    </div>
    <div class="form-group w-75">
        Jenis Kelamin<br><input type="radio" name="gender" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="gender" value="Perempuan">Perempuan
    </div>
    <div class="form-group w-75">
        Alamat<textarea name="alamat" class="form-control"></textarea>
    </div>
    <div class="form-group w-75">
        Tanggal Lahir<input type="date" class="form-control" name="tanggal">
    </div>
    <div class="form-group w-75">
        Tempat Lahir<input type="text" class="form-control" name="tempat">
    </div>
    <div class="form-group w-75">
        No. HP<input type="number" class="form-control" name="nohp">
    </div>
    <div class="form-group w-75">
        Hobi<br><input type="checkbox" name="h1" value="Futsal">Futsal
               <input type="checkbox" name="h2" value="Badminton">Badminton
               <input type="checkbox" name="h3" value="Basket">Basket
               <input type="checkbox" name="h4" value="Voli">Voli
    </div>
            <input type="submit" class="btn btn-primary" name="input" value="Kirim"><br>
    </FORM>

    <?php
    // error_reporting(0);
    if(isset($_POST['input'])){
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $alamat=$_POST['alamat'];
        $tanggal=$_POST['tanggal'];
        $tempat=$_POST['tempat'];
        $nohp=$_POST['nohp'];
        $hobi1=$_POST['h1'];
        $hobi2=$_POST['h2'];
        $hobi3=$_POST['h3'];
        $hobi4=$_POST['h4'];

        echo"Nama : <b>$nama</b><br>";
        echo"E-mail : $email<br>";
        echo"Jenis Kelamin : $gender<br>";
        echo"Alamat : $alamat<br>";
        echo"Tanggal Lahir : $tanggal<br>";
        echo"No. HP : $nohp<br>";
        echo"Hobi : $hobi1 $hobi2 $hobi3 $hobi4";
    }
    ?>

    </div>

    <!-- js jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- js bundle -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.js.map"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js.map"></script>
    <!-- js bootstrap -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.js.map"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js.map"></script>
</body>
</html>

