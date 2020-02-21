<?php
    $user="admin";
    $pass="admin123";

    if($user=="admin" && $pass=="admin123"){
        echo"Masuk ke halaman admin";
    }else if($user=="siswa" && $pass=="siswa123"){
        echo"Masuk ke halaman siswa";
    }else{
        echo"Username atau password salah";
    }
?>

<br>

<?php

    $user="";

    if(Isset($user)){
        echo"Variabel tidak ada";
    }else{
        echo"Variabel ada";
    }

?>