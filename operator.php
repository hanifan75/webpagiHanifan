<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jual=100000;
    $potongan=0.1;
    $net=$jual-($jual*$potongan);

    echo "Penjualan bersih = Rp. $net <br>" ;

    $hal=23;

    if($hal%2==0){
        echo "halaman genap";
    }else if($hal%3==2){
        echo "halaman utama";
    }else{
        echo "halaman ganjil";
    }

    $a=10;
    $b=5;
    $c=7;
    $d=8;

    $kali=$a*$d;
    $tambah=$a+$c;
    $kurang=$b-$d;
    $bagi=$a/$b;
    $hasil="";

    if($hasil==80){
        echo"Nilai anda adalah $kali";
    }else if($hasil==17){
        echo"Nilai anda adalah $tambah";
    }else if($hasil==-3){
        echo"Nilai anda adalah $kurang";
    }else if($hasil==2){
        echo"Nilai anda adalah $bagi";
    }else{
        echo"Nilai anda tidak ada";
    }
    ?>
</body>
</html>