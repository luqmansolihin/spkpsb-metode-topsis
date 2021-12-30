<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 2){

    $id_siswa = $_GET['id_siswa'];

    $batalkanPrestasi = mysql_query("UPDATE prestasi SET status='0' WHERE id_siswa='$id_siswa'");
    if ($batalkanPrestasi){
        header('location:../index.php?page=verifikasi');
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>