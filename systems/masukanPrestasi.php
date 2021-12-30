<?php
error_reporting(0);
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 3){
    $id_siswa = $_POST['id_siswa'];
    $nilaiSemester1 = $_POST['nilaiSemester1'];
    $nilaiSemester2 = $_POST['nilaiSemester2'];
    $presKec = $_POST['presKec'];
    $jumlahPresKec = count($presKec);
    $presKot = $_POST['presKot'];
    $jumlahPresKot = count($presKot);
    $presNas = $_POST['presNas'];
    $jumlahPresNas = count($presNas);
    $organisasi = $_POST['organisasi'];
    $jumlahOrganisasi = count($organisasi);
    $ekstrakurikuler = $_POST['ekstrakurikuler'];
    $jumlahEkstrakurikuler = count($ekstrakurikuler);
    $poinTingkahLaku = $_POST['poinTingkahLaku'];
    $cekPrestasi = mysql_num_rows(mysql_query("SELECT * FROM prestasi WHERE id_siswa='$id_siswa'"));
    if ($cekPrestasi == 0) {
        if ($presKec != ['']){
            for($x=0; $x<$jumlahPresKec; $x++){
                mysql_query("INSERT INTO preskec(id_preskec, id_siswa, nama_preskec, foto_preskec) VALUES('', '$id_siswa', '$presKec[$x]', 'no-image.png')");
            }
        }
        if ($presKot != ['']) {
            for($x=0; $x<$jumlahPresKot; $x++){
                mysql_query("INSERT INTO preskot(id_preskot, id_siswa, nama_preskot, foto_preskot) VALUES('', '$id_siswa', '$presKot[$x]', 'no-image.png')");
            }
        }
        if ($presNas != ['']) {
            for($x=0; $x<$jumlahPresKec; $x++){
                mysql_query("INSERT INTO presnas(id_presnas, id_siswa, nama_presnas, foto_presnas) VALUES('', '$id_siswa', '$presNas[$x]', 'no-image.png')");
            }
        }
        for($x=0; $x<$jumlahOrganisasi; $x++){
            mysql_query("INSERT INTO organisasi(id_organisasi, id_siswa, organisasi) VALUES('', '$id_siswa', '$organisasi[$x]')");
        }
        for($x=0; $x<$jumlahEkstrakurikuler; $x++){
            mysql_query("INSERT INTO ekstrakurikuler(id_ekstrakurikuler, id_siswa, ekstrakurikuler) VALUES('', '$id_siswa', '$ekstrakurikuler[$x]')");
        }
        
        $hitungPresKec = mysql_num_rows(mysql_query("SELECT * FROM preskec WHERE id_siswa='$id_siswa'"));
        $hitungPresKot = mysql_num_rows(mysql_query("SELECT * FROM preskot WHERE id_siswa='$id_siswa'"));
        $hitungPresNas = mysql_num_rows(mysql_query("SELECT * FROM presnas WHERE id_siswa='$id_siswa'"));
        $hitungOrganisasi = mysql_num_rows(mysql_query("SELECT * FROM organisasi WHERE id_siswa='$id_siswa'"));
        $hitungEkstrakurikuler = mysql_num_rows(mysql_query("SELECT * FROM ekstrakurikuler WHERE id_siswa='$id_siswa'"));
        if ($nilaiSemester1 != '' OR $nilaiSemester2 != '' OR $hitungPresKec != 0 OR $hitungPresKot != 0 OR $hitungPresNas != 0 OR $hitungOrganisasi != 0 OR $hitungEkstrakurikuler !=0 OR $poinTingkahLaku != '') {
            $masukanPrestasi = mysql_query("INSERT INTO prestasi VALUES('', '$id_siswa', '$nilaiSemester1', '$nilaiSemester2', '$hitungPresKec', '$hitungPresKot', '$hitungPresNas', '$hitungOrganisasi', '$hitungEkstrakurikuler', '$poinTingkahLaku', '0')");
            if ($masukanPrestasi) {
                header("location:../index.php?page=dataPrestasi");
            }
        }else {
            header("location:javascript://history.go(-1)");        
        }
    }else {
        ?><script>alert('Data Prestasi Sudah Dimasukan.');
        document.location="../index.php?page=dataPrestasi"</script><?php
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>