<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 3) {
    $id_presnas = $_POST['id_presnas'];

    $nama_file=$_FILES['foto_presnas']['name'];
    $ukuran_file=$_FILES['foto_presnas']['size'];
    $tipe_file=$_FILES['foto_presnas']['type'];
    $tmp_file=$_FILES['foto_presnas']['tmp_name'];

    $path = "../images/presnas/".$nama_file;
    if ($nama_file != ''){
        if ($tipe_file=="image/jpeg" || $tipe_file=="image/jpg" || $tipe_file=="image/png" || $tipe_file=="image/JPEG" || $tipe_file=="image/JPG" || $tipe_file=="image/PNG") {
            if ($ukuran_file<=1000000) {
                if (move_uploaded_file($tmp_file, $path)) {
                    $query = mysql_query("UPDATE presnas SET foto_presnas='$nama_file' WHERE id_presnas='$id_presnas'");
                    if ($query) {
                        header("location:../index.php?page=prestasiNasional");
                    }
                }else {
                    ?><script>alert('Bukti Prestasi Gagal Diunggah.');
                    document.location="../index.php?page=prestasiNasional"</script><?php
                }
            }else {
                ?><script>alert('Ukuran Gambar Lebih dari 1 MB.');
                document.location="../index.php?page=prestasiNasional"</script><?php
            }
        }else {
            ?><script>alert('Tipe Gambar Harus JPEG/JPG/PNG.');
            document.location="../index.php?page=prestasiNasional"</script><?php
        }
    }else {
        header("location:javascript://history.go(-1)");    
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>