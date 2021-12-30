<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 1){
    $ubahBobot1 = mysql_query("UPDATE bobot SET bobot = '$_POST[1]' WHERE id_bobot='1'");
    $ubahBobot2 = mysql_query("UPDATE bobot SET bobot = '$_POST[2]' WHERE id_bobot='2'");
    $ubahBobot3 = mysql_query("UPDATE bobot SET bobot = '$_POST[3]' WHERE id_bobot='3'");
    $ubahBobot4 = mysql_query("UPDATE bobot SET bobot = '$_POST[4]' WHERE id_bobot='4'");
    $ubahBobot5 = mysql_query("UPDATE bobot SET bobot = '$_POST[5]' WHERE id_bobot='5'");
    $ubahBobot6 = mysql_query("UPDATE bobot SET bobot = '$_POST[6]' WHERE id_bobot='6'");
    $ubahBobot7 = mysql_query("UPDATE bobot SET bobot = '$_POST[7]' WHERE id_bobot='7'");
    $ubahBobot8 = mysql_query("UPDATE bobot SET bobot = '$_POST[8]' WHERE id_bobot='8'");    
    if ($ubahBobot8){
        header("location:../index.php?page=bobot");    
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>