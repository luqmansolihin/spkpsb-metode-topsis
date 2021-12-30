<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 3) {
    $id_preskec = $_POST['id_preskec'];

    $nama_file=$_FILES['foto_preskec']['name'];
    $ukuran_file=$_FILES['foto_preskec']['size'];
    $tipe_file=$_FILES['foto_preskec']['type'];
    $tmp_file=$_FILES['foto_preskec']['tmp_name'];

    $path = "../images/preskec/".$nama_file;
    if ($nama_file != ''){
        if ($tipe_file=="image/jpeg" || $tipe_file=="image/jpg" || $tipe_file=="image/png" || $tipe_file=="image/JPEG" || $tipe_file=="image/JPG" || $tipe_file=="image/PNG") {
            if ($ukuran_file<=1000000) {
                if (move_uploaded_file($tmp_file, $path)) {
                    $query = mysql_query("UPDATE preskec SET foto_preskec='$nama_file' WHERE id_preskec='$id_preskec'");
                    if ($query) {
                        header("location:../index.php?page=prestasiKecamatan");
                    }
                }else {
                    ?><script>alert('Bukti Prestasi Gagal Diunggah.');
                    document.location="../index.php?page=prestasiKecamatan"</script><?php
                }
            }else {
                ?><script>alert('Ukuran Gambar Lebih dari 1 MB.');
                document.location="../index.php?page=prestasiKecamatan"</script><?php
            }
        }else {
            ?><script>alert('Tipe Gambar Harus JPEG/JPG/PNG.');
            document.location="../index.php?page=prestasiKecamatan"</script><?php
        }
    }else {
        header("location:javascript://history.go(-1)");    
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>