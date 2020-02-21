<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a=10;
    $b=20;

    function myTest(){
        global $a;
        global $b;
        echo $a.$b;
    }

    myTest();

        // global $a;

        $a="abc";
        $b="M. Hanifan Luthfi";

        // $GLOBALS["a"]="abc";
        // $GLOBALS["b"]="M. Hanifan Luthfi";
        echo $a.$b;

    ?>

<?php

$nama="M. Hanifan Luthfi";
$alamat="Tungkop";
$nohp="081252097153";

$hasil="1";
if($hasil==1){
    echo $nama;
}
else if($hasil==2){
    echo $alamat;
}
else{
    echo $nohp;
}

?>
</body>
</html>