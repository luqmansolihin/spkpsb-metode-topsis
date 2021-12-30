<?php
require 'drone.php';
require 'koneksi.php';
if ($_SESSION['login'] == 1) {
    
    $hapusMatrik = mysql_query("DELETE FROM matrik");
    $prestasiQuery = mysql_query("SELECT * FROM prestasi WHERE status='1'");
    $cekPrestasi = mysql_num_rows($prestasiQuery);
    if ($cekPrestasi != 0) {
        $i = 1;
        while ($prestasi = mysql_fetch_array($prestasiQuery)) {
            $id_siswa = $prestasi['id_siswa'];
            $nilai_sem1 = $prestasi['nilai_sem1'];
            $nilai_sem2 = $prestasi['nilai_sem2'];
            $prestasi_kecamatan = $prestasi['prestasi_kecamatan']*0.2;
            $prestasi_kota = $prestasi['prestasi_kota']*0.3;
            $prestasi_nasional = $prestasi['prestasi_nasional']*0.4;
            $organisasi = $prestasi['organisasi'];
            $ekstrakurikuler = $prestasi['ekstrakurikuler'];
            if ($prestasi['kredit_poin'] == 0) {
                $kredit_poin = 1;
            }else if ($prestasi['kredit_poin'] > 0 AND $prestasi['kredit_poin'] <=25) {
                $kredit_poin = 2;
            }else if ($prestasi['kredit_poin'] > 25 AND $prestasi['kredit_poin'] <=50) {
                $kredit_poin = 3;
            }else if ($prestasi['kredit_poin'] > 50 AND $prestasi['kredit_poin'] <=75) {
                $kredit_poin = 4;
            }else if ($prestasi['kredit_poin'] > 75 AND $prestasi['kredit_poin'] <=100) {
                $kredit_poin = 5;
            }
            $masukanMatrik = mysql_query("INSERT INTO matrik VALUES('$i', '$id_siswa', '$nilai_sem1', '$nilai_sem2', '$prestasi_kecamatan', '$prestasi_kota', '$prestasi_nasional', '$organisasi', '$ekstrakurikuler', '$kredit_poin')");
            $i++;
        }
        
        
        $hapusNormalisasi = mysql_query("DELETE FROM normalisasi");
        $pembagiQuery = mysql_query("SELECT * FROM matrik");
        $pembagiVar1 = 0;
        $pembagiVar2 = 0;
        $pembagiVar3 = 0;
        $pembagiVar4 = 0;
        $pembagiVar5 = 0;
        $pembagiVar6 = 0;
        $pembagiVar7 = 0;
        $pembagiVar8 = 0;
        while ($pembagi = mysql_fetch_array($pembagiQuery)) {
            $pembagiVar1 += $pembagi['nilai_sem1']*$pembagi['nilai_sem1'];
            $pembagiVar2 += $pembagi['nilai_sem2']*$pembagi['nilai_sem2'];
            $pembagiVar3 += $pembagi['prestasi_kecamatan']*$pembagi['prestasi_kecamatan'];
            $pembagiVar4 += $pembagi['prestasi_kota']*$pembagi['prestasi_kota'];
            $pembagiVar5 += $pembagi['prestasi_nasional']*$pembagi['prestasi_nasional'];
            $pembagiVar6 += $pembagi['organisasi']*$pembagi['organisasi'];
            $pembagiVar7 += $pembagi['ekstrakurikuler']*$pembagi['ekstrakurikuler'];
            $pembagiVar8 += $pembagi['kredit_poin']*$pembagi['kredit_poin'];
        }
        $matrikQuery = mysql_query("SELECT * FROM matrik");
        $i = 1;
        while ($matrik = mysql_fetch_array($matrikQuery)) {
            $id_siswa = $matrik['id_siswa'];
            $nilai_sem1 = $matrik['nilai_sem1']/(sqrt($pembagiVar1));
            $nilai_sem2 = $matrik['nilai_sem2']/(sqrt($pembagiVar2));
            $prestasi_kecamatan = $matrik['prestasi_kecamatan']/(sqrt($pembagiVar3));
            $prestasi_kota = $matrik['prestasi_kota']/(sqrt($pembagiVar4));
            $prestasi_nasional = $matrik['prestasi_nasional']/(sqrt($pembagiVar5));
            $organisasi = $matrik['organisasi']/(sqrt($pembagiVar6));
            $ekstrakurikuler = $matrik['ekstrakurikuler']/(sqrt($pembagiVar7));
            $kredit_poin = $matrik['kredit_poin']/(sqrt($pembagiVar8));
            $masukanNormalisasi = mysql_query("INSERT INTO normalisasi VALUES('$i', '$id_siswa', '$nilai_sem1', '$nilai_sem2', '$prestasi_kecamatan', '$prestasi_kota', '$prestasi_nasional', '$organisasi', '$ekstrakurikuler', '$kredit_poin')");
            $i++;
        }
        
        
        $normalisasiQuery = mysql_query("SELECT * FROM normalisasi");
        $hapusPembobotan = mysql_query("DELETE FROM normalisasi_terbobot");
        $bobotTotal = mysql_fetch_array(mysql_query("SELECT SUM(bobot) FROM bobot"));
        $bobotVar1 = mysql_fetch_array(mysql_query("SELECT * FROM bobot WHERE id_bobot='1'"));
        $bobotVar2 = mysql_fetch_array(mysql_query("SELECT * FROM bobot WHERE id_bobot='2'"));
        $bobotVar3 = mysql_fetch_array(mysql_query("SELECT * FROM bobot WHERE id_bobot='3'"));
        $bobotVar4 = mysql_fetch_array(mysql_query("SELECT * FROM bobot WHERE id_bobot='4'"));
        $bobotVar5 = mysql_fetch_array(mysql_query("SELECT * FROM bobot WHERE id_bobot='5'"));
        $bobotVar6 = mysql_fetch_array(mysql_query("SELECT * FROM bobot WHERE id_bobot='6'"));
        $bobotVar7 = mysql_fetch_array(mysql_query("SELECT * FROM bobot WHERE id_bobot='7'"));
        $bobotVar8 = mysql_fetch_array(mysql_query("SELECT * FROM bobot WHERE id_bobot='8'"));
        $i = 1;
        while ($normalisasi = mysql_fetch_array($normalisasiQuery)) {
            $id_siswa = $normalisasi['id_siswa'];
            $nilai_sem1 = $normalisasi['nilai_sem1']*($bobotVar1['bobot']/$bobotTotal['SUM(bobot)']);
            $nilai_sem2 = $normalisasi['nilai_sem2']*($bobotVar2['bobot']/$bobotTotal['SUM(bobot)']);
            $prestasi_kecamatan = $normalisasi['prestasi_kecamatan']*($bobotVar3['bobot']/$bobotTotal['SUM(bobot)']);
            $prestasi_kota = $normalisasi['prestasi_kota']*($bobotVar4['bobot']/$bobotTotal['SUM(bobot)']);
            $prestasi_nasional = $normalisasi['prestasi_nasional']*($bobotVar5['bobot']/$bobotTotal['SUM(bobot)']);
            $organisasi = $normalisasi['organisasi']*($bobotVar6['bobot']/$bobotTotal['SUM(bobot)']);
            $ekstrakurikuler = $normalisasi['ekstrakurikuler']*($bobotVar7['bobot']/$bobotTotal['SUM(bobot)']);
            $kredit_poin = $normalisasi['kredit_poin']*($bobotVar8['bobot']/$bobotTotal['SUM(bobot)']);
            $masukanPembobotan = mysql_query("INSERT INTO normalisasi_terbobot VALUES('$i', '$id_siswa', '$nilai_sem1', '$nilai_sem2', '$prestasi_kecamatan', '$prestasi_kota', '$prestasi_nasional', '$organisasi', '$ekstrakurikuler', '$kredit_poin')");
            $i++;
        }
        
        $positifVar1 = mysql_fetch_array(mysql_query("SELECT MAX(nilai_sem1) FROM normalisasi_terbobot"));
        $positifVar2 = mysql_fetch_array(mysql_query("SELECT MAX(nilai_sem2) FROM normalisasi_terbobot"));
        $positifVar3 = mysql_fetch_array(mysql_query("SELECT MAX(prestasi_kecamatan) FROM normalisasi_terbobot"));
        $positifVar4 = mysql_fetch_array(mysql_query("SELECT MAX(prestasi_kota) FROM normalisasi_terbobot"));
        $positifVar5 = mysql_fetch_array(mysql_query("SELECT MAX(prestasi_nasional) FROM normalisasi_terbobot"));
        $positifVar6 = mysql_fetch_array(mysql_query("SELECT MAX(organisasi) FROM normalisasi_terbobot"));
        $positifVar7 = mysql_fetch_array(mysql_query("SELECT MAX(ekstrakurikuler) FROM normalisasi_terbobot"));
        $positifVar8 = mysql_fetch_array(mysql_query("SELECT MIN(kredit_poin) FROM normalisasi_terbobot"));

        $negatifVar1 = mysql_fetch_array(mysql_query("SELECT MIN(nilai_sem1) FROM normalisasi_terbobot"));
        $negatifVar2 = mysql_fetch_array(mysql_query("SELECT MIN(nilai_sem2) FROM normalisasi_terbobot"));
        $negatifVar3 = mysql_fetch_array(mysql_query("SELECT MIN(prestasi_kecamatan) FROM normalisasi_terbobot"));
        $negatifVar4 = mysql_fetch_array(mysql_query("SELECT MIN(prestasi_kota) FROM normalisasi_terbobot"));
        $negatifVar5 = mysql_fetch_array(mysql_query("SELECT MIN(prestasi_nasional) FROM normalisasi_terbobot"));
        $negatifVar6 = mysql_fetch_array(mysql_query("SELECT MIN(organisasi) FROM normalisasi_terbobot"));
        $negatifVar7 = mysql_fetch_array(mysql_query("SELECT MIN(ekstrakurikuler) FROM normalisasi_terbobot"));
        $negatifVar8 = mysql_fetch_array(mysql_query("SELECT MAX(kredit_poin) FROM normalisasi_terbobot"));
        $pembobotanQuery = mysql_query("SELECT * FROM normalisasi_terbobot");
        $hapusHasil = mysql_query("DELETE FROM hasil");
        $i = 1;
        while ($pembobotan = mysql_fetch_array($pembobotanQuery)){
            $id_siswa = $pembobotan['id_siswa'];
            $positif = sqrt(($pembobotan['nilai_sem1']-$positifVar1['MAX(nilai_sem1)'])*($pembobotan['nilai_sem1']-$positifVar1['MAX(nilai_sem1)'])+($pembobotan['nilai_sem2']-$positifVar2['MAX(nilai_sem2)'])*($pembobotan['nilai_sem2']-$positifVar2['MAX(nilai_sem2)'])+($pembobotan['prestasi_kecamatan']-$positifVar3['MAX(prestasi_kecamatan)'])*($pembobotan['prestasi_kecamatan']-$positifVar3['MAX(prestasi_kecamatan)'])+($pembobotan['prestasi_kota']-$positifVar4['MAX(prestasi_kota)'])*($pembobotan['prestasi_kota']-$positifVar4['MAX(prestasi_kota)'])+($pembobotan['prestasi_nasional']-$positifVar5['MAX(prestasi_nasional)'])*($pembobotan['prestasi_nasional']-$positifVar5['MAX(prestasi_nasional)'])+($pembobotan['organisasi']-$positifVar6['MAX(organisasi)'])*($pembobotan['organisasi']-$positifVar6['MAX(organisasi)'])+($pembobotan['ekstrakurikuler']-$positifVar7['MAX(ekstrakurikuler)'])*($pembobotan['ekstrakurikuler']-$positifVar7['MAX(ekstrakurikuler)'])+($pembobotan['kredit_poin']-$positifVar8['MIN(kredit_poin)'])*($pembobotan['kredit_poin']-$positifVar8['MIN(kredit_poin)']));
            $negatif = sqrt(($pembobotan['nilai_sem1']-$negatifVar1['MIN(nilai_sem1)'])*($pembobotan['nilai_sem1']-$negatifVar1['MIN(nilai_sem1)'])+($pembobotan['nilai_sem2']-$negatifVar2['MIN(nilai_sem2)'])*($pembobotan['nilai_sem2']-$negatifVar2['MIN(nilai_sem2)'])+($pembobotan['prestasi_kecamatan']-$negatifVar3['MIN(prestasi_kecamatan)'])*($pembobotan['prestasi_kecamatan']-$negatifVar3['MIN(prestasi_kecamatan)'])+($pembobotan['prestasi_kota']-$negatifVar4['MIN(prestasi_kota)'])*($pembobotan['prestasi_kota']-$negatifVar4['MIN(prestasi_kota)'])+($pembobotan['prestasi_nasional']-$negatifVar5['MIN(prestasi_nasional)'])*($pembobotan['prestasi_nasional']-$negatifVar5['MIN(prestasi_nasional)'])+($pembobotan['organisasi']-$negatifVar6['MIN(organisasi)'])*($pembobotan['organisasi']-$negatifVar6['MIN(organisasi)'])+($pembobotan['ekstrakurikuler']-$negatifVar7['MIN(ekstrakurikuler)'])*($pembobotan['ekstrakurikuler']-$negatifVar7['MIN(ekstrakurikuler)'])+($pembobotan['kredit_poin']-$negatifVar8['MAX(kredit_poin)'])*($pembobotan['kredit_poin']-$negatifVar8['MAX(kredit_poin)']));
            $preferensi = $negatif/($negatif+$positif);
            $masukanPembobotan = mysql_query("INSERT INTO hasil VALUES('$i', '$id_siswa', '$positif', '$negatif', '$preferensi', '')");
            $i++;
        }

        
        $hasilQuery = mysql_query("SELECT * FROM hasil ORDER BY preferensi DESC");
        $i = 1;
        while ($hasil = mysql_fetch_array($hasilQuery)){
            $perangkingan = mysql_query("UPDATE hasil SET peringkat='$i' WHERE id_hasil='$hasil[id_hasil]'");
            $i++;
        }
        
        header("location:../index.php?page=seleksi");
    }else {
        ?><script>alert('Verifikasi data prestasi terlebih dahulu.');
        document.location="../index.php?page=hitungSeleksi"</script><?php
    }
}else {
    header("location:javascript://history.go(-1)");
}
?>