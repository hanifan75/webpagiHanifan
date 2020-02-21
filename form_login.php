<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include"header.php";
        include "koneksi/koneksi.php";
    ?>
</head>
<body>
    <div class="container">
        <form action="proses/proses_login.php" method="POST">
        <h2 class="text-center">Form Login</h2>
        <div class="form-group w-75">
        <label>Username</label>
        <input type="text" class="form-control" name="user"><br>
        </div>
        <div class="form-group w-75">
        <label>Password</label>
        <input type="password" class="form-control" name="pass">
        </div>
        <input type="submit" class="btn btn-primary" name="login">
        </form>

    <?php
        include"footer.php";
    ?>
    </div>
</body>
</html>