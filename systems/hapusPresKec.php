<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 3){
    $id_preskec = $_GET['id_preskec'];
    
    $hapusPresKec = mysql_query("DELETE FROM preskec WHERE id_preskec='$id_preskec'");
    $id_siswa = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE id_user='$_SESSION[id_user]'"));
    $hitungPresKec = mysql_num_rows(mysql_query("SELECT * FROM preskec WHERE id_siswa='$id_siswa[id_siswa]'"));
    $perbaikiPresKec = mysql_query("UPDATE prestasi SET prestasi_kecamatan='$hitungPresKec' WHERE id_siswa='$id_siswa[id_siswa]'");
    if ($perbaikiPresKec) {
        header("location:../index.php?page=prestasiKecamatan");
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>