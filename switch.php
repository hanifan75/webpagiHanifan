<?php
$hari=date("D");
switch($hari){
    case'Mon':$hari='Senin'; break;
    case'Tue':$hari='Selasa'; break;
    case'Wed':$hari='Rabu'; break;
    case'Thu':$hari='Kamis'; break;
    case'Fri':$hari='Jumat'; break;
    case'Sat':$hari='Sabtu'; break;
    case'Sun':$hari='Minggu'; break;
    default:$hari='apa'; break;
}
echo "Hari ini hari <b>$hari</b>";
?>