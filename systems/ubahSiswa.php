<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 1){
    $id_user = $_POST['id_user'];
    $Nama = $_POST['nama'];
    $Kelas = $_POST['kelas'];
    $password = md5($_POST['password']);
    
    $cekPassword = mysql_fetch_array(mysql_query("SELECT password FROM user WHERE id_user='$id_user'"));
    if ($cekPassword['password'] == $_POST['password']){
        $ubahSiswa = mysql_query("UPDATE siswa SET Nama='$Nama', Kelas='$Kelas' WHERE id_user='$id_user'");
        if ($ubahSiswa){
            header("location:../index.php?page=dataSiswa");    
        }
    }else {
        $ubahUser = mysql_query("UPDATE user SET password='$password' WHERE id_user='$id_user'");
        $ubahSiswa = mysql_query("UPDATE siswa SET Nama='$Nama', Kelas='$Kelas' WHERE id_user='$id_user'");
        if ($ubahSiswa){
            header("location:../index.php?page=dataSiswa");    
        }
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>