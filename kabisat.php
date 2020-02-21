<?php

    $tahun=date("Y");

    if($tahun%4==0){
        echo"Tahun $tahun adalah tahun Kabisat";
    }else{
        echo"Tahun $tahun adalah tahun kabisat";
    }

?>
<br>
<?php

    $tahun=date("Y");
    $kabisat=($tahun%4==0) ? "Kabisat" : "Bukan Kabisat";
    echo"Tahun $tahun adalah tahun $kabisat";

?>