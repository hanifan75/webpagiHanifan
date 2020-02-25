<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="html/css/login_efek.css">
    <?php
        include "koneksi/koneksi.php";
    ?>
</head>
<body>
        <div class="wrapper">
        <div class="login-text">
            <button class="cta"><i class="fas fa-chevron-down fa-1x"></i></button>
            <div class="text">
            <a href="">Login</a>
            <hr>
            <br>
            <input type="text" placeholder="Username" name="user">
            <br>
            <input type="password" placeholder="Password" name="pass">
            <br>
            <button class="login-btn" name="login">Log In</button>
            <button class="signup-btn">Sign Up</button>
            </div>
        </div>
        <div class="call-text">
            <h1>Show us your <span>creative</span> side</h1>
            <button>Join the Community</button>
        </div>

        </div>

        <script src="html/js/respon.js"></script>
</body>
</html>