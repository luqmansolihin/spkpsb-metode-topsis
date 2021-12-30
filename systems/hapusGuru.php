<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 1) {

    $id_user = $_GET['id_user'];

    $hapusGuru = mysql_query("DELETE FROM guru WHERE id_user=$id_user");
    $hapusAkun = mysql_query("DELETE FROM user WHERE id_user=$id_user");
    if ($hapusAkun){
        header("location:../index.php?page=dataGuru");
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>