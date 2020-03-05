<?php

    if(isset($_POST['upload'])){

        // nama file
        $namafile=$_FILES['foto']['name'];
        // explode string nama file
        $format=explode(".",$namafile);
        // ambil data ujung dari explode
        $fileextension=end($format);
        // nama sementara
        $namasementara=$_FILES['foto']['tmp_name'];
        // enkripsi nama file
        $md5file=md5($namafile).".".$fileextension;

        // lokasi upload
        $direktori="../upload/";

        // sintaks upload
        $upload=move_uploaded_file($namasementara,$direktori.$md5file);

        if($upload){
            echo"<script>
                alert('File berhasil di upload');
                window.location.href='../upload.php';
                </script>";
        }else{
            echo"<script>
                alert('File gagal di upload');
                window.location.href='../upload.php';
                </script>";
        }


    }

?>