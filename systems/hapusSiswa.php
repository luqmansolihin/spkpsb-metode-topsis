<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 1){

    $id_user = $_GET['id_user'];

    $id_siswa = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE id_user='$id_user'"));
    $hapusPresKec = mysql_query("DELETE FROM preskec WHERE id_siswa='$id_siswa[id_siswa]'");
    $hapusPresKot = mysql_query("DELETE FROM preskot WHERE id_siswa='$id_siswa[id_siswa]'");
    $hapusPresNas = mysql_query("DELETE FROM presnas WHERE id_siswa='$id_siswa[id_siswa]'");
    $hapusOrganisasi = mysql_query("DELETE FROM organisasi WHERE id_siswa='$id_siswa[id_siswa]'");
    $hapusEkstrakurikuler = mysql_query("DELETE FROM ekstrakurikuler WHERE id_siswa='$id_siswa[id_siswa]'");
    $hapusPrestasi = mysql_query("DELETE FROM prestasi WHERE id_siswa='$id_siswa[id_siswa]'");
    $hapusSiswa = mysql_query("DELETE FROM siswa WHERE id_user=$id_user");
    $hapusAkun = mysql_query("DELETE FROM user WHERE id_user=$id_user");
    if ($hapusAkun){
        header("location:../index.php?page=dataSiswa");
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>