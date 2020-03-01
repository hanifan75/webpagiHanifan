<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="html/css/login_animasi.css">

    <?php
        include "koneksi/koneksi.php";
        session_start();
    ?>
</head>
<body>
<!-- container form -->
    <section class="forms-section">
        <h1 class="section-title">Form Animasi</h1>
<!-- form login -->
        <div class="forms">
            <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
                Login
                <span class="underline"></span>
            </button>

            <form action="proses/proses_login.php" class="form form-login" method="POST">
                <fieldset>
                <legend>Please, enter your email and password for login.</legend>
                <div class="input-block">
                    <label for="login-user">Username</label>
                    <input id="login-user" type="text" name="user" required>
                </div>
                <div class="input-block">
                    <label for="login-pass">Password</label>
                    <input id="login-pass" type="password" name="pass" required>
                </div>
                </fieldset>
                <button type="submit" class="btn-login" name="login">Login</button>
            </form>
            </div>

            <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
                Register
                <span class="underline"></span>
            </button>
<!-- form register -->
            <form action="proses/proses_register.php" class="form form-signup"  method="POST">
                <fieldset>
                <legend>Please, enter your username, email, password and password confirmation for sign up.</legend>
                <div class="input-block">
                    <label for="signup-fullname">Nama Lengkap</label>
                    <input id="signup-fullname" type="text" name="fullname" required>
                </div>
                <div class="input-block">
                    <label for="signup-email">E-mail</label>
                    <input id="signup-email" type="email" name="email" required>
                </div>
                <div class="input-block">
                    <label for="signup-user">Username</label>
                    <input id="signup-user" type="text" name="user" required>
                </div>
                <div class="input-block">
                    <label for="signup-password">Password</label>
                    <input id="signup-password" type="password" name="pass" required>
                </div>
                <div class="input-block">
                    <label for="signup-conpass">Konfirmasi Password</label>
                    <input id="signup-conpass" type="password" name="conpass" required>
                </div>
                <div class="input-block">
                    <label for="signup-level">Level</label>
                    <select id="signup-level" name="level">
                    <option value="penjual">Penjual</option>
                    <option value="pembeli">Pembeli</option>
                    </select>
                </div>
                </fieldset>
                <button type="submit" class="btn-signup" name="register">Register</button>
            </form>
            </div>
        </div>
    </section>

    <script src="html/js/login_animasi.js"></script>
</body>
</html>