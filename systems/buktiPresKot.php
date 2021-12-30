<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 3) {
    $id_preskot = $_POST['id_preskot'];

    $nama_file=$_FILES['foto_preskot']['name'];
    $ukuran_file=$_FILES['foto_preskot']['size'];
    $tipe_file=$_FILES['foto_preskot']['type'];
    $tmp_file=$_FILES['foto_preskot']['tmp_name'];

    $path = "../images/preskot/".$nama_file;
    if ($nama_file != ''){
        if ($tipe_file=="image/jpeg" || $tipe_file=="image/jpg" || $tipe_file=="image/png" || $tipe_file=="image/JPEG" || $tipe_file=="image/JPG" || $tipe_file=="image/PNG") {
            if ($ukuran_file<=1000000) {
                if (move_uploaded_file($tmp_file, $path)) {
                    $query = mysql_query("UPDATE preskot SET foto_preskot='$nama_file' WHERE id_preskot='$id_preskot'");
                    if ($query) {
                        header("location:../index.php?page=prestasiKota");
                    }
                }else {
                    ?><script>alert('Bukti Prestasi Gagal Diunggah.');
                    document.location="../index.php?page=prestasiKota"</script><?php
                }
            }else {
                ?><script>alert('Ukuran Gambar Lebih dari 1 MB.');
                document.location="../index.php?page=prestasiKota"</script><?php
            }
        }else {
            ?><script>alert('Tipe Gambar Harus JPEG/JPG/PNG.');
            document.location="../index.php?page=prestasiKota"</script><?php
        }
    }else {
        header("location:javascript://history.go(-1)");    
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>