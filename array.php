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
        <input type="text" name="buah">
        <input type="submit" name="tambah" value="Tampil">
    
    </form>

    <?php
        if(isset($_POST['tambah'])){
            $buah=$_POST['buah'];

            $arrayBuah=["Mangga","Jambu","Kelapa"];
                echo"<b>$arrayBuah[0]</b><br>";
            }
        
    ?>

    <!-- Array -->
    <?php
    // First Method
    $arrBuah=array("Mangga", "Apel", "Pisang", "Jeruk");
    echo "$arrBuah[0] ";
    echo "$arrBuah[3]<br>";

    // Second Method
    $arrWarna=array();
    $arrWarna[] = "Merah";
    $arrWarna[] = "Biru";
    $arrWarna[] = "Hijau";
    $arrWarna[] = "Putih";
    echo "$arrWarna[1] ";
    echo "$arrWarna[3]<br>";

    // Third Method
    $arrBenda=["Tas","Sepatu","Dompet","Pensil"];
    echo"$arrBenda[0] ";
    echo"$arrBenda[3]<br>";




    ?>


    <?php
    include"footer.php";
    ?>
</body>
</html>