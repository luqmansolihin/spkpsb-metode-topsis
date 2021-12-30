<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login']==1){

    $id_user = $_GET['id_user'];

    $aktifGuru = mysql_query("UPDATE user SET status='aktif' WHERE id_user='$id_user'");
    if ($aktifGuru){
        header("location:../index.php?page=dataGuru");
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>