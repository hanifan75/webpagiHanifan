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
    <div class="card-header bg-primary">
    <h2 class="text-center">Form Biodata</h2>
    </div>
    <div class="card-body bg-secondary text-light">
    <FORM action="proses/proses_biodata.php" METHOD="POST" NAME="input" enctype="multipart/form-data">
        <div class="form-group">
            <label class="font-weight-bold">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">E-mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group" >
            <label class="font-weight-bold">Jenis Kelamin</label>
            <input type="radio" name="gender" value="laki-laki">Laki-Laki
            <input type="radio" name="gender" value="perempuan">Perempuan
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Lahir</label>
            <input type="text" class="form-control" name="tempat">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">No. HP</label>
            <input type="number" class="form-control" name="nohp">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Hobi</label>
            <input type="checkbox" name="hobi1" value="Futsal">Futsal
            <input type="checkbox" name="hobi2" value="Badminton">Badminton
            <input type="checkbox" name="hobi3" value="Basket">Basket
            <input type="checkbox" name="hobi4" value="Voli">Voli
        </div>
        <div class="form-group">
        <label class="font-weight-bold">Upload File</label>
        <input type="file" name="foto">
        </div>
            <input type="submit" class="btn btn-primary" name="input" value="Kirim"><br>
    </FORM>
            
    </div> 
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

