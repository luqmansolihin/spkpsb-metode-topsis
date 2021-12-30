<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 1){
    $NIP = $_POST['nip'];
    $Nama = $_POST['nama'];
    $Kelas = $_POST['kelas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $cekGuru = mysql_num_rows(mysql_query("SELECT * FROM guru WHERE NIP='$NIP'"));
    if ($cekGuru == 0){
        $cekUsername = mysql_num_rows(mysql_query("SELECT * FROM user WHERE username='$username'"));
        if ($cekUsername == 0){
            $masukanUser = mysql_query("INSERT INTO user (id_user, username, password, status, image, id_level) VALUES ('','$username','$password','aktif','guru.jpg','2')");
            $id_user = mysql_fetch_array(mysql_query("SELECT id_user FROM user WHERE username='$username'"));
            $masukanGuru = mysql_query("INSERT INTO guru (id_guru, NIP, Nama, Kelas, id_user) VALUES ('','$NIP','$Nama','$Kelas','$id_user[id_user]')");
            if ($masukanGuru){
                header("location:../index.php?page=dataGuru");    
            }
        }else {
            ?><script>alert('Username sudah digunakan.');
            document.location="../index.php?page=masukanGuru"</script><?php    
        }
    }else {
        ?><script>alert('Guru sudah didaftarkan.');
        document.location="../index.php?page=masukanGuru"</script><?php
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>