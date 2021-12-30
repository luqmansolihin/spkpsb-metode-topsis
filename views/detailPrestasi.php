    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 2) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Verifikasi Data Prestasi</strong>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $id_siswa = $_GET['id_siswa'];
                                    $siswaQuery = mysql_query("SELECT * FROM siswa WHERE id_siswa='$id_siswa'");
                                    $siswa = mysql_fetch_array($siswaQuery);
                                    $prestasiQuery = mysql_query("SELECT * FROM prestasi WHERE id_siswa='$id_siswa'");
                                    $prestasi = mysql_fetch_array($prestasiQuery);
                                    ?>
                                    <div class="col-lg-6">
                                        <?php
                                        echo "<strong>Nama</strong>  : ".$siswa['Nama']."<br>";
                                        echo "<strong>NIS</strong>   : ".$siswa['NIS']."<br>";
                                        echo "<strong>Kelas</strong> : ".$siswa['Kelas'];
                                        ?>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <img class="rounded-circle mx-auto d-block" src="images/admin.png" style="width:100px; height:100px;">
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">                                
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nilai Rata-Rata Semester 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"><?php echo $prestasi['nilai_sem1']; ?></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">                                
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nilai Rata-Rata Semester 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"><?php echo $prestasi['nilai_sem2']; ?></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Penghargaan Tingkat Kecamatan</th>
                                                <th scope="col">Bukti Penghargaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $preskecQuery = mysql_query("SELECT * FROM preskec WHERE id_siswa='$siswa[id_siswa]'");
                                            $i = 1;
                                            while ($preskec = mysql_fetch_array($preskecQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td>
                                                        <?php                                                        
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                    </td>
                                                    <td><?php echo $preskec['nama_preskec']; ?></td>
                                                    <td>
                                                        <?php
                                                        echo "<img src='images/preskec/$preskec[foto_preskec]' style='width:100px; height:auto;'>";
                                                        ?>
                                                    </td>
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
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Penghargaan Tingkat Kota</th>
                                                <th scope="col">Bukti Penghargaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $preskotQuery = mysql_query("SELECT * FROM preskot WHERE id_siswa='$siswa[id_siswa]'");
                                            $i = 1;
                                            while ($preskot = mysql_fetch_array($preskotQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td>
                                                        <?php
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                    </td>
                                                    <td><?php echo $preskot['nama_preskot']; ?></td>
                                                    <td>
                                                        <?php
                                                        echo "<img src='images/preskot/$preskot[foto_preskot]' style='width:100px; height:auto;'>";
                                                        ?>
                                                    </td>
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
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Penghargaan Tingkat Nasional</th>
                                                <th scope="col">Bukti Penghargaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $presnasQuery = mysql_query("SELECT * FROM presnas WHERE id_siswa='$siswa[id_siswa]'");
                                            $i = 1;
                                            while ($presnas = mysql_fetch_array($presnasQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td>
                                                        <?php
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                    </td>
                                                    <td><?php echo $presnas['nama_presnas']; ?></td>
                                                    <td>
                                                        <?php
                                                        echo "<img src='images/presnas/$presnas[foto_presnas]' style='width:100px; height:auto;'>";
                                                        ?>
                                                    </td>
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
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Organisasi</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $organisasiQuery = mysql_query("SELECT * FROM organisasi WHERE id_siswa='$siswa[id_siswa]'");
                                            $i = 1;
                                            while ($organisasi = mysql_fetch_array($organisasiQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td>
                                                        <?php
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                    </td>
                                                    <td><?php echo $organisasi['organisasi']; ?></td>
                                                    <td><?php echo "Ikut Dalam Organisasi";?></td>
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
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Ekstrakurikuler</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ekstrakurikulerQuery = mysql_query("SELECT * FROM ekstrakurikuler WHERE id_siswa='$siswa[id_siswa]'");
                                            $i = 1;
                                            while ($ekstrakurikuler = mysql_fetch_array($ekstrakurikulerQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td>
                                                        <?php
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                    </td>
                                                    <td><?php echo $ekstrakurikuler['ekstrakurikuler']; ?></td>
                                                    <td><?php echo "Ikut Dalam Ekstrakurikuler";?></td>
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
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kredit Poin Tingkah Laku</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                                           
                                            $kreditpoinQuery = mysql_query("SELECT * FROM prestasi WHERE id_siswa='$siswa[id_siswa]'"); 
                                            while ($kreditpoin = mysql_fetch_array($kreditpoinQuery)) {
                                            ?>
                                                <tr>                                                
                                                    <td><?php echo $kreditpoin['kredit_poin']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <center>
                                        <a href="systems/verifikasiPrestasi.php?id_siswa=<?php echo $id_siswa; ?>">
                                            <button type="submit" class="btn btn-success col-lg-5 btn-sm">
                                                <i class="fa fa-check"></i> VERIFIKASI DATA PRESTASI
                                            </button>
                                        </a>
                                        <a href="systems/tidakCocokPrestasi.php?id_siswa=<?php echo $id_siswa; ?>">
                                            <button type="submit" class="btn btn-danger col-lg-5 btn-sm">
                                                <i class="fa fa-close"></i> DATA TIDAK COCOK
                                            </button>
                                        </a>
                                    </center>
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