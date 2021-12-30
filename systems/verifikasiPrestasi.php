<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 2){

    $id_siswa = $_GET['id_siswa'];

    $tolakPrestasi = mysql_query("UPDATE prestasi SET status='1' WHERE id_siswa='$id_siswa'");
    if ($tolakPrestasi){
        header('location:../index.php?page=verifikasi');
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>