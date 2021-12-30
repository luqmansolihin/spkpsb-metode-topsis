<?php
error_reporting(0);
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 3) {
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
    if ($cekPrestasi != 0) {
        mysql_query("DELETE FROM organisasi WHERE id_siswa='$id_siswa'");
        for($x=0; $x<$jumlahOrganisasi; $x++){
            mysql_query("INSERT INTO organisasi(id_organisasi, id_siswa, organisasi) VALUES('', '$id_siswa', '$organisasi[$x]')");
        }
        mysql_query("DELETE FROM ekstrakurikuler WHERE id_siswa='$id_siswa'");
        for($x=0; $x<$jumlahEkstrakurikuler; $x++){
            mysql_query("INSERT INTO ekstrakurikuler(id_ekstrakurikuler, id_siswa, ekstrakurikuler) VALUES('', '$id_siswa', '$ekstrakurikuler[$x]')");
        }
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

        $hitungPresKec = mysql_num_rows(mysql_query("SELECT * FROM preskec WHERE id_siswa='$id_siswa'"));
        $hitungPresKot = mysql_num_rows(mysql_query("SELECT * FROM preskot WHERE id_siswa='$id_siswa'"));
        $hitungPresNas = mysql_num_rows(mysql_query("SELECT * FROM presnas WHERE id_siswa='$id_siswa'"));
        $hitungOrganisasi = mysql_num_rows(mysql_query("SELECT * FROM organisasi WHERE id_siswa='$id_siswa'"));
        $hitungEkstrakurikuler = mysql_num_rows(mysql_query("SELECT * FROM ekstrakurikuler WHERE id_siswa='$id_siswa'"));

        $perbaikanPrestasi = mysql_query("UPDATE prestasi SET nilai_sem1='$nilaiSemester1', nilai_sem2='$nilaiSemester2', prestasi_kecamatan='$hitungPresKec', prestasi_kota='$hitungPresKot', prestasi_nasional='$hitungPresNas', organisasi='$hitungOrganisasi', ekstrakurikuler='$hitungEkstrakurikuler', kredit_poin='$poinTingkahLaku' WHERE id_siswa='$id_siswa'");
        if ($perbaikanPrestasi) {
            header("location:../index.php?page=dataPrestasi");    
        }
    }else {
        ?><script>alert('Data Prestasi Belum di Masukan.');
        document.location="../index.php?page=masukanPrestasi"</script><?php
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>