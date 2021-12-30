<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 1) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $nama_file=$_FILES['foto']['name'];
    $ukuran_file=$_FILES['foto']['size'];
    $tipe_file=$_FILES['foto']['type'];
    $tmp_file=$_FILES['foto']['tmp_name'];

    $path = "../images/admin/".$nama_file;
    if ($nama_file != ''){
        if ($tipe_file=="image/jpeg" || $tipe_file=="image/jpg" || $tipe_file=="image/png" || $tipe_file=="image/JPEG" || $tipe_file=="image/JPG" || $tipe_file=="image/PNG") {
            if ($ukuran_file<=1000000) {
                if (move_uploaded_file($tmp_file, $path)) {
                    $cekPassword = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$id_user'"));
                    if ($cekPassword['password'] == $password) {
                        $ubahAdmin = mysql_query("UPDATE admin SET Nama='$nama' WHERE id_user='$id_user'");
                        $ubahUser = mysql_query("UPDATE user SET image='$nama_file' WHERE id_user='$id_user'");
                        if ($ubahUser) {
                            header("location:../index.php?page=pengaturanAkun");
                        }
                    }else {
                        $password = md5($_POST['password']);
                        $ubahAdmin = mysql_query("UPDATE admin SET Nama='$nama' WHERE id_user='$id_user'");
                        $ubahUser = mysql_query("UPDATE user SET image='$nama_file', password='$password' WHERE id_user='$id_user'");
                        if ($ubahUser) {
                            header("location:../login/controllers/logout.php");
                        }
                    }
                }else {
                    ?><script>alert('Foto Gagal Diunggah.');
                    document.location="../index.php?page=pengaturanAkun"</script><?php
                }
            }else {
                ?><script>alert('Ukuran Gambar Lebih dari 1 MB.');
                document.location="../index.php?page=pengaturanAkun"</script><?php
            }
        }else {
            ?><script>alert('Tipe Gambar Harus JPEG/JPG/PNG.');
            document.location="../index.php?page=pengaturanAkun"</script><?php
        }
    }else {
        $cekPassword = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$id_user'"));
        if ($cekPassword['password'] == $password) {
            $ubahAdmin = mysql_query("UPDATE admin SET Nama='$nama' WHERE id_user='$id_user'");
            if ($ubahAdmin) {
                header("location:../index.php?page=pengaturanAkun");
            }
        }else {
            $password = md5($_POST['password']);
            $ubahAdmin = mysql_query("UPDATE admin SET Nama='$nama' WHERE id_user='$id_user'");
            $ubahUser = mysql_query("UPDATE user SET password='$password' WHERE id_user='$id_user'");
            if ($ubahUser) {
                header("location:../login/controllers/logout.php");
            }
        }    
    }
}else if ($_SESSION['login'] == 2) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $nama_file=$_FILES['foto']['name'];
    $ukuran_file=$_FILES['foto']['size'];
    $tipe_file=$_FILES['foto']['type'];
    $tmp_file=$_FILES['foto']['tmp_name'];

    $path = "../images/guru/".$nama_file;
    if ($nama_file != ''){
        if ($tipe_file=="image/jpeg" || $tipe_file=="image/jpg" || $tipe_file=="image/png" || $tipe_file=="image/JPEG" || $tipe_file=="image/JPG" || $tipe_file=="image/PNG") {
            if ($ukuran_file<=1000000) {
                if (move_uploaded_file($tmp_file, $path)) {
                    $cekPassword = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$id_user'"));
                    if ($cekPassword['password'] == $password) {
                        $ubahGuru = mysql_query("UPDATE guru SET Nama='$nama' WHERE id_user='$id_user'");
                        $ubahUser = mysql_query("UPDATE user SET image='$nama_file' WHERE id_user='$id_user'");
                        if ($ubahUser) {
                            header("location:../index.php?page=pengaturanAkun");
                        }
                    }else {
                        $password = md5($_POST['password']);
                        $ubahGuru = mysql_query("UPDATE guru SET Nama='$nama' WHERE id_user='$id_user'");
                        $ubahUser = mysql_query("UPDATE user SET image='$nama_file', password='$password' WHERE id_user='$id_user'");
                        if ($ubahUser) {
                            header("location:../login/controllers/logout.php");
                        }
                    }
                }else {
                    ?><script>alert('Foto Gagal Diunggah.');
                    document.location="../index.php?page=pengaturanAkun"</script><?php
                }
            }else {
                ?><script>alert('Ukuran Gambar Lebih dari 1 MB.');
                document.location="../index.php?page=pengaturanAkun"</script><?php
            }
        }else {
            ?><script>alert('Tipe Gambar Harus JPEG/JPG/PNG.');
            document.location="../index.php?page=pengaturanAkun"</script><?php
        }
    }else {
        $cekPassword = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$id_user'"));
        if ($cekPassword['password'] == $password) {
            $ubahGuru = mysql_query("UPDATE guru SET Nama='$nama' WHERE id_user='$id_user'");
            if ($ubahGuru) {
                header("location:../index.php?page=pengaturanAkun");
            }
        }else {
            $password = md5($_POST['password']);
            $ubahGuru = mysql_query("UPDATE guru SET Nama='$nama' WHERE id_user='$id_user'");
            $ubahUser = mysql_query("UPDATE user SET password='$password' WHERE id_user='$id_user'");
            if ($ubahUser) {
                header("location:../login/controllers/logout.php");
            }
        }    
    }
}else if ($_SESSION['login'] == 3) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $nama_file=$_FILES['foto']['name'];
    $ukuran_file=$_FILES['foto']['size'];
    $tipe_file=$_FILES['foto']['type'];
    $tmp_file=$_FILES['foto']['tmp_name'];

    $path = "../images/siswa/".$nama_file;
    if ($nama_file != ''){
        if ($tipe_file=="image/jpeg" || $tipe_file=="image/jpg" || $tipe_file=="image/png" || $tipe_file=="image/JPEG" || $tipe_file=="image/JPG" || $tipe_file=="image/PNG") {
            if ($ukuran_file<=1000000) {
                if (move_uploaded_file($tmp_file, $path)) {
                    $cekPassword = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$id_user'"));
                    if ($cekPassword['password'] == $password) {
                        $ubahSiswa = mysql_query("UPDATE siswa SET Nama='$nama' WHERE id_user='$id_user'");
                        $ubahUser = mysql_query("UPDATE user SET image='$nama_file' WHERE id_user='$id_user'");
                        if ($ubahUser) {
                            header("location:../index.php?page=pengaturanAkun");
                        }
                    }else {
                        $password = md5($_POST['password']);
                        $ubahSiswa = mysql_query("UPDATE siswa SET Nama='$nama' WHERE id_user='$id_user'");
                        $ubahUser = mysql_query("UPDATE user SET image='$nama_file', password='$password' WHERE id_user='$id_user'");
                        if ($ubahUser) {
                            header("location:../login/controllers/logout.php");
                        }
                    }
                }else {
                    ?><script>alert('Foto Gagal Diunggah.');
                    document.location="../index.php?page=pengaturanAkun"</script><?php
                }
            }else {
                ?><script>alert('Ukuran Gambar Lebih dari 1 MB.');
                document.location="../index.php?page=pengaturanAkun"</script><?php
            }
        }else {
            ?><script>alert('Tipe Gambar Harus JPEG/JPG/PNG.');
            document.location="../index.php?page=pengaturanAkun"</script><?php
        }
    }else {
        $cekPassword = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$id_user'"));
        if ($cekPassword['password'] == $password) {
            $ubahSiswa = mysql_query("UPDATE siswa SET Nama='$nama' WHERE id_user='$id_user'");
            if ($ubahSiswa) {
                header("location:../index.php?page=pengaturanAkun");
            }
        }else {
            $password = md5($_POST['password']);
            $ubahSiswa = mysql_query("UPDATE siswa SET Nama='$nama' WHERE id_user='$id_user'");
            $ubahUser = mysql_query("UPDATE user SET password='$password' WHERE id_user='$id_user'");
            if ($ubahUser) {
                header("location:../login/controllers/logout.php");
            }
        }    
    }
}else if ($_SESSION['login'] == 4) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $nama_file=$_FILES['foto']['name'];
    $ukuran_file=$_FILES['foto']['size'];
    $tipe_file=$_FILES['foto']['type'];
    $tmp_file=$_FILES['foto']['tmp_name'];

    $path = "../images/kepsek/".$nama_file;
    if ($nama_file != ''){
        if ($tipe_file=="image/jpeg" || $tipe_file=="image/jpg" || $tipe_file=="image/png" || $tipe_file=="image/JPEG" || $tipe_file=="image/JPG" || $tipe_file=="image/PNG") {
            if ($ukuran_file<=1000000) {
                if (move_uploaded_file($tmp_file, $path)) {
                    $cekPassword = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$id_user'"));
                    if ($cekPassword['password'] == $password) {
                        $ubahKepsek = mysql_query("UPDATE kepsek SET Nama='$nama' WHERE id_user='$id_user'");
                        $ubahUser = mysql_query("UPDATE user SET image='$nama_file' WHERE id_user='$id_user'");
                        if ($ubahUser) {
                            header("location:../index.php?page=pengaturanAkun");
                        }
                    }else {
                        $password = md5($_POST['password']);
                        $ubahKepsek = mysql_query("UPDATE kepsek SET Nama='$nama' WHERE id_user='$id_user'");
                        $ubahUser = mysql_query("UPDATE user SET image='$nama_file', password='$password' WHERE id_user='$id_user'");
                        if ($ubahUser) {
                            header("location:../login/controllers/logout.php");
                        }
                    }
                }else {
                    ?><script>alert('Foto Gagal Diunggah.');
                    document.location="../index.php?page=pengaturanAkun"</script><?php
                }
            }else {
                ?><script>alert('Ukuran Gambar Lebih dari 1 MB.');
                document.location="../index.php?page=pengaturanAkun"</script><?php
            }
        }else {
            ?><script>alert('Tipe Gambar Harus JPEG/JPG/PNG.');
            document.location="../index.php?page=pengaturanAkun"</script><?php
        }
    }else {
        $cekPassword = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$id_user'"));
        if ($cekPassword['password'] == $password) {
            $ubahKepsek = mysql_query("UPDATE kepsek SET Nama='$nama' WHERE id_user='$id_user'");
            if ($ubahKepsek) {
                header("location:../index.php?page=pengaturanAkun");
            }
        }else {
            $password = md5($_POST['password']);
            $ubahKepsek = mysql_query("UPDATE kepsek SET Nama='$nama' WHERE id_user='$id_user'");
            $ubahUser = mysql_query("UPDATE user SET password='$password' WHERE id_user='$id_user'");
            if ($ubahUser) {
                header("location:../login/controllers/logout.php");
            }
        }    
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>