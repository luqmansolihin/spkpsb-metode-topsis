    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 1){
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Matrik</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">I</th>
                                                <th scope="col">II</th>
                                                <th scope="col">III</th>
                                                <th scope="col">IV</th>
                                                <th scope="col">V</th>
                                                <th scope="col">VI</th>
                                                <th scope="col">VII</th>
                                                <th scope="col">VIII</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $matrikQuery = mysql_query("SELECT * FROM matrik");
                                            while ($matrik = mysql_fetch_array($matrikQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td><?php echo $matrik['id_matrik']; ?></td>
                                                    <td><?php echo $matrik['nilai_sem1']; ?></td>
                                                    <td><?php echo $matrik['nilai_sem2']; ?></td>
                                                    <td><?php echo $matrik['prestasi_kecamatan']; ?></td>
                                                    <td><?php echo $matrik['prestasi_kota']; ?></td>
                                                    <td><?php echo $matrik['prestasi_nasional']; ?></td>
                                                    <td><?php echo $matrik['organisasi']; ?></td>
                                                    <td><?php echo $matrik['ekstrakurikuler']; ?></td>
                                                    <td><?php echo $matrik['kredit_poin']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Normalisasi</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">I</th>
                                                <th scope="col">II</th>
                                                <th scope="col">III</th>
                                                <th scope="col">IV</th>
                                                <th scope="col">V</th>
                                                <th scope="col">VI</th>
                                                <th scope="col">VII</th>
                                                <th scope="col">VIII</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $normalisasiQuery = mysql_query("SELECT * FROM normalisasi");
                                            while ($normalisasi = mysql_fetch_array($normalisasiQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td><?php echo $normalisasi['id_normalisasi']; ?></td>
                                                    <td><?php echo $normalisasi['nilai_sem1']; ?></td>
                                                    <td><?php echo $normalisasi['nilai_sem2']; ?></td>
                                                    <td><?php echo $normalisasi['prestasi_kecamatan']; ?></td>
                                                    <td><?php echo $normalisasi['prestasi_kota']; ?></td>
                                                    <td><?php echo $normalisasi['prestasi_nasional']; ?></td>
                                                    <td><?php echo $normalisasi['organisasi']; ?></td>
                                                    <td><?php echo $normalisasi['ekstrakurikuler']; ?></td>
                                                    <td><?php echo $normalisasi['kredit_poin']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Pembobotan</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">I</th>
                                                <th scope="col">II</th>
                                                <th scope="col">III</th>
                                                <th scope="col">IV</th>
                                                <th scope="col">V</th>
                                                <th scope="col">VI</th>
                                                <th scope="col">VII</th>
                                                <th scope="col">VIII</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pembobotanQuery = mysql_query("SELECT * FROM normalisasi_terbobot");
                                            while ($pembobotan = mysql_fetch_array($pembobotanQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td><?php echo $pembobotan['id_normalisasi_terbobot']; ?></td>
                                                    <td><?php echo $pembobotan['nilai_sem1']; ?></td>
                                                    <td><?php echo $pembobotan['nilai_sem2']; ?></td>
                                                    <td><?php echo $pembobotan['prestasi_kecamatan']; ?></td>
                                                    <td><?php echo $pembobotan['prestasi_kota']; ?></td>
                                                    <td><?php echo $pembobotan['prestasi_nasional']; ?></td>
                                                    <td><?php echo $pembobotan['organisasi']; ?></td>
                                                    <td><?php echo $pembobotan['ekstrakurikuler']; ?></td>
                                                    <td><?php echo $pembobotan['kredit_poin']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Solusi Ideal</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">I</th>
                                                <th scope="col">II</th>
                                                <th scope="col">III</th>
                                                <th scope="col">IV</th>
                                                <th scope="col">V</th>
                                                <th scope="col">VI</th>
                                                <th scope="col">VII</th>
                                                <th scope="col">VIII</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
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
                                            ?>
                                            <tr>                                                
                                                <td><?php echo "Positif" ?></td>
                                                <td><?php echo number_format($positifVar1['MAX(nilai_sem1)'], 7); ?></td>
                                                <td><?php echo number_format($positifVar2['MAX(nilai_sem2)'], 7); ?></td>
                                                <td><?php echo number_format($positifVar3['MAX(prestasi_kecamatan)'], 7); ?></td>
                                                <td><?php echo number_format($positifVar4['MAX(prestasi_kota)'], 7); ?></td>
                                                <td><?php echo number_format($positifVar5['MAX(prestasi_nasional)'], 7); ?></td>
                                                <td><?php echo number_format($positifVar6['MAX(organisasi)'], 7); ?></td>
                                                <td><?php echo number_format($positifVar7['MAX(ekstrakurikuler)'], 7); ?></td>
                                                <td><?php echo number_format($positifVar8['MIN(kredit_poin)'], 7); ?></td>
                                            </tr>
                                            <tr>                                                
                                                <td><?php echo "Negatif" ?></td>
                                                <td><?php echo number_format($negatifVar1['MIN(nilai_sem1)'], 7); ?></td>
                                                <td><?php echo number_format($negatifVar2['MIN(nilai_sem2)'], 7); ?></td>
                                                <td><?php echo number_format($negatifVar3['MIN(prestasi_kecamatan)'], 7); ?></td>
                                                <td><?php echo number_format($negatifVar4['MIN(prestasi_kota)'], 7); ?></td>
                                                <td><?php echo number_format($negatifVar5['MIN(prestasi_nasional)'], 7); ?></td>
                                                <td><?php echo number_format($negatifVar6['MIN(organisasi)'], 7); ?></td>
                                                <td><?php echo number_format($negatifVar7['MIN(ekstrakurikuler)'], 7); ?></td>
                                                <td><?php echo number_format($negatifVar8['MAX(kredit_poin)'], 7); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="typo-articles">
                                        <h6>Keterangan: </h6>
                                        <p>
                                            <strong>I</strong> = Rata-Rata Nilai Semester 1, <strong>II</strong> = Rata-Rata Nilai Semester 2, 
                                            <strong>III</strong> = Prestasi Tingkat Kecamatan, <strong>IV</strong> = Prestasi Tingkat Kota,
                                            <strong>V</strong> = Prestasi Tingkat Nasional, <strong>VI</strong> = Keaktifan dalam Organisasi, 
                                            <strong>VII</strong> = Keaktifan dalam Ekstrakurikuler, <strong>VIII</strong> = Kredit Poin Tingkah Laku.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Hasil</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Positif</th>
                                                <th scope="col">Negatif</th>
                                                <th scope="col">Preferensi</th>
                                                <th scope="col">Peringkat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $hasilQuery = mysql_query("SELECT * FROM hasil ORDER BY peringkat ASC");
                                            while ($hasil = mysql_fetch_array($hasilQuery)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $hasil['id_siswa']; ?></td>
                                                    <td><?php echo $hasil['positif']; ?></td>
                                                    <td><?php echo $hasil['negatif']; ?></td>
                                                    <td><?php echo $hasil['preferensi']; ?></td>
                                                    <td><?php echo $hasil['peringkat']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="?page=hasil">
                                        <button type="submit" class="btn-block btn-success btn-sm">
                                            SIMPAN
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
    <?php
    }else {
        include '404.php';
    }
    ?>