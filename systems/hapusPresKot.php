<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 3){
    $id_preskot = $_GET['id_preskot'];
    
    $hapusPresKot = mysql_query("DELETE FROM preskot WHERE id_preskot='$id_preskot'");
    $id_siswa = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE id_user='$_SESSION[id_user]'"));
    $hitungPresKot = mysql_num_rows(mysql_query("SELECT * FROM preskot WHERE id_siswa='$id_siswa[id_siswa]'"));
    $perbaikiPresKot = mysql_query("UPDATE prestasi SET prestasi_kota='$hitungPresKot' WHERE id_siswa='$id_siswa[id_siswa]'");
    if ($perbaikiPresKot) {
        header("location:../index.php?page=prestasiKota");
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>