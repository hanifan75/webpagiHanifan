<?php

include "../koneksi/koneksi.php";

if(isset($_POST['input'])){
    $id=uniqid();
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $alamat=$_POST['alamat'];
    $tanggal_lahir=$_POST['tanggal'];
    $tempat_lahir=$_POST['tempat'];
    $nohp=$_POST['nohp'];
    $hobi1=(!empty($_POST['hobi1']))?$_POST['hobi1']:'';
    $hobi2=(!empty($_POST['hobi2']))?$_POST['hobi2']:'';
    $hobi3=(!empty($_POST['hobi3']))?$_POST['hobi3']:'';
    $hobi4=(!empty($_POST['hobi4']))?$_POST['hobi4']:'';
    $hobi=($hobi1.''.$hobi2.''.$hobi3.''.$hobi4);
    


    $namafile=$_FILES['foto']['name'];
    $format=explode(".",$namafile);
    $fileextension=end($format);
    $namasementara=$_FILES['foto']['tmp_name'];
    $md5file=md5($namafile).".".$fileextension;

    $direktori="../upload/";

    $upload=move_uploaded_file($namasementara,$direktori.$md5file);

    $input_data=mysqli_query($koneksi,"INSERT INTO biodata VALUES ('$id','$nama','$email','$alamat','$nohp','$hobi','$tanggal_lahir','$tempat_lahir','$gender','$md5file','')") or die(mysqli_error($input_data));

    if($input_data){
        echo"<script>
            alert('Data berhasil di input');
            window.location.href='../form.php';
            </script>";
    }else{
        echo"<script>
            alert('Data gagal di input');
            window.location.href='../form.php';
            </script>";
    }
    
}
?>