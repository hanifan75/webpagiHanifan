<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include"header.php";
    ?>
</head>
<body>
    
    <form action="" method="POST">
    <input type="text" name="warna">
    <input type="submit" name="hasil">
    </form>

<?php
    if(isset($_POST['hasil'])){
        $warna=$_POST['warna'];

        $arrcolor=array();
        $arrcolor[]="Merah";
        $arrcolor[]="Biru";
        $arrcolor[]="Hijau";
        $arrcolor[]="Kuning";
        $arrcolor[]="Coklat";
        
        if($warna==$arrcolor[0]){
            echo"<b style='color:red'>$warna</b>";
        }else if($warna==$arrcolor[1]){
            echo"<b style='color:blue'>$warna</b>";
        }else if($warna==$arrcolor[2]){
            echo"<b style='color:green'>$warna</b>";
        }else if($warna==$arrcolor[3]){
            echo"<b style='color:yellow'>$warna</b>";
        }else if($warna==$arrcolor[4]){
            echo"<b style='color:brown'>$warna</b>";
        }
        else{
            echo"$warna";
        }
    }
?>

    <?php
        include"footer.php";
    ?>
</body>
</html>