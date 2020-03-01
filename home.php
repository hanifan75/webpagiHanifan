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
        error_reporting(0);
    ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="home.php">FORMULIR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>

      <?php if($_SESSION['level']=="penjual"){?>

      <li class="nav-item">
        <a class="nav-link" href="form_mahasiswa.php">Mahasiswa</a>
      </li>

      <?php }else if($_SESSION['level']=="pembeli") {?>
      
      <li class="nav-item">
        <a class="nav-link" href="form_barang.php">Stok</a>
      </li>

      <?php }?>
    </ul>
    <ul class="navbar-nav">
        <?php if($_SESSION['level']=="penjual"||$_SESSION['level']=="pembeli"){ ?>
        <li>
            <a class="nav-link" href="">
                <?php 
                echo"Selamat Datang" .$_SESSION['nama_user']=$data['nama_user']."" ;
                ?>
            </a>
        </li>
        <li>
            <a class="nav-link" href="proses/proses_logout.php">Log Out</a>
        </li>
        
        <?php } else{?>
        <li>
            <a class="nav-link" href="login_animasi.php">Log In</a>
        </li>
        <?php }?>
    </ul>
  </div>
</nav>

<?php
    include "footer.php";
?>
</body>
</html>    