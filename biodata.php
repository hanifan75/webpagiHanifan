<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $nim=1308107010005;
    $nama="M. Hanifan Luthfi";
    $umur=24;
    $nilai=3.33;
    $status=FALSE;

    echo"NIM : $nim <br>";
    echo"Nama : $nama <br>";
    echo"Umur : $umur <br>";
    print"Umur : " .$umur; print"<br>";
    echo"Nilai : $nilai <br>";
    printf("Nilai : %.3f<br>", $nilai);
    if($status){
        echo"Status: Aktif";
    }else{
        echo"Status : Non-aktif";
    }
?>
<br>
<br>

<?php
    define("nama", "M. Hanifan Luthfi");
    define("nilai", "90");
    
    echo "Nama : " .nama;
    echo "<br>Nilai : " .nilai;

?>

<br>
<br>

<?php
    $gaji=1000000;
    $pajak=0.025;
    $gaji_net=$gaji-($gaji*$pajak);

    echo"Gaji sebelum pajak adalah Rp. $gaji <br>";
    echo"Gaji yang dibawa pulang adalah Rp. $gaji_net";
?>

<br>
<br>

<?php

    $a=5;
    $b=4;

    echo"$a == $b : ". ($a==$b);
    echo"<br>$a != $b : ". ($a!=$b);
    echo"<br>$a > $b : ". ($a>$b);
    echo"<br>$a < $b : ". ($a<$b);
    echo"<br>($a == $b) && ($a > $b) : ". (($a == $b) && ($a > $b));
    echo"<br>($a == $b) || ($a > $b) : ". (($a == $b) || ($a > $b));
    echo"<br>($a != $b) && ($a > $b) : ". (($a != $b) && ($a > $b));
    echo"<br>($a != $b) || ($a > $b) : ". (($a != $b) || ($a > $b));

?>

<br>
<br>

<?php

$hari="minggu";

if($hari=="senin"){
    echo"Hari Upacara";
}else if($hari=="selasa"){
    echo"Hari Matematika";
}else if($hari=="rabu"){
    echo"Hari IPA";
}else if($hari=="kamis"){
    echo"Hari IPS";
}else if($hari=="jumat"){
    echo"Hari Bahasa";
}else if($hari=="sabtu"){
    echo"Setengah Hari";
}else if($hari=="minggu"){
    echo"Hari Libur";
}else{
    echo"Bukan Nama Hari";
}

?>
</body>
</html>