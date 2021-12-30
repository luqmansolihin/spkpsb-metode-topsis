<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 3){
    $id_presnas = $_GET['id_presnas'];
    
    $hapusPresNas = mysql_query("DELETE FROM presnas WHERE id_presnas='$id_presnas'");
    $id_siswa = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE id_user='$_SESSION[id_user]'"));
    $hitungPresNas = mysql_num_rows(mysql_query("SELECT * FROM presnas WHERE id_siswa='$id_siswa[id_siswa]'"));
    $perbaikiPresNas = mysql_query("UPDATE prestasi SET prestasi_nasional='$hitungPresNas' WHERE id_siswa='$id_siswa[id_siswa]'");
    if ($perbaikiPresNas) {
        header("location:../index.php?page=prestasiNasional");
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>