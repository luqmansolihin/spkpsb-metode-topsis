<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 1){

    $id_user = $_GET['id_user'];

    $nonaktifSiswa = mysql_query("UPDATE user SET status='nonaktif' WHERE id_user='$id_user'");
    if ($nonaktifSiswa){
        header("location:../index.php?page=dataSiswa");
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>