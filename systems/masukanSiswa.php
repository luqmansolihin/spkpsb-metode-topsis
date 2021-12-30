<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login']==1){
    $NIS = $_POST['nis'];
    $Nama = $_POST['nama'];
    $Kelas = $_POST['kelas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $cekSiswa = mysql_num_rows(mysql_query("SELECT * FROM siswa WHERE NIS='$NIS'"));
    if ($cekSiswa == 0){
        $cekUsername = mysql_num_rows(mysql_query("SELECT * FROM user WHERE username='$username'"));
        if ($cekUsername == 0){
            $masukanUser = mysql_query("INSERT INTO user (id_user, username, password, status, image, id_level) VALUES ('','$username','$password','aktif','siswa.jpg','3')");
            $id_user = mysql_fetch_array(mysql_query("SELECT id_user FROM user WHERE username='$username'"));
            $masukanSiswa = mysql_query("INSERT INTO siswa (id_siswa, NIS, Nama, Kelas, id_user) VALUES ('','$NIS','$Nama','$Kelas','$id_user[id_user]')");
            if ($masukanSiswa){
                header("location:../index.php?page=dataSiswa");    
            }
        }else {
            ?><script>alert('Username sudah digunakan.');
            document.location="../index.php?page=masukanSiswa"</script><?php    
        }
    }else {
        ?><script>alert('Siswa sudah didaftarkan.');
        document.location="../index.php?page=masukanSiswa"</script><?php
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>