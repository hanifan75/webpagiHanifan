<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../html/css/tabel.css">
    <?php
        include '../koneksi/koneksi.php';
        session_start();
    ?>
</head>
<body>
<?php

        $tampil_data=mysqli_query($koneksi,"SELECT * FROM mahasiswa") or die(mysqli_error($tampil_data));

        if(mysqli_num_rows($tampil_data)){
            echo"
                <center>
                <h1>Daftar Nilai Mahasiswa</h1>
                <table>
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai Harian</th>
                            <th>Nilai Quiz</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Nilai Akhir</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>";
            while($data=mysqli_fetch_assoc($tampil_data)){
                echo'<tbody>
                        <tr>
                            <td>'.$data["nim"].'</td>
                            <td>'.$data["nama"].'</td>
                            <td>'.$data["jurusan"].'</td>
                            <td>'.$data["mata_kuliah"].'</td>
                            <td>'.$data["nilai_harian"].'</td>
                            <td>'.$data["nilai_quiz"].'</td>
                            <td>'.$data["nilai_uts"].'</td>
                            <td>'.$data["nilai_uas"].'</td>
                            <td>'.$data["nilai_akhir"].'</td>
                            <td>'.$data["grade"].'</td>
                            <td colspan=2>
                            <a href="../form_edit_mahasiswa.php?id_mahasiswa='.$data["id_mahasiswa"].'"><input class="button" type="submit" value="EDIT"></a>
                            <a href="../proses/proses_hapus_mahasiswa.php?id_mahasiswa='.$data["id_mahasiswa"].'" onclick="return confirm(\'Anda Yakin Ingin Menghapus Data Ini ?\');"><input class="button" type="submit" value="HAPUS"></a>
                            </td>
                        </tr>
                </tbody>';
            }
            echo"</table>
                </center>";
        }else{
            echo"Data tidak ditemukan";
        }

    
?>

<br>

<a href="../form_mahasiswa.php"><img src="../html/img/back.png" width="22px"> Kembali</a>

</body>
</html>