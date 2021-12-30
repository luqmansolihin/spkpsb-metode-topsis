    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 1) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Prestasi Siswa</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Nilai</th>
                                                <th>Penghargaan</th>
                                                <th>Keaktifan</th>
                                                <th>Kredit Poin</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                                        
                                            $prestasiQuery = mysql_query("SELECT * FROM prestasi JOIN siswa ON prestasi.id_siswa=siswa.id_siswa ORDER BY siswa.Nama ASC");
                                            $i = 1;
                                            while ($prestasi = mysql_fetch_array($prestasiQuery)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                    </td>                                                                                                      
                                                    <td>
                                                        <?php
                                                        $siswaQuery = mysql_query("SELECT * FROM siswa where id_siswa='$prestasi[id_siswa]'");
                                                        $siswa = mysql_fetch_array($siswaQuery);
                                                        echo $siswa['Nama'];
                                                        ?>
                                                    </td>
                                                    <td><?php echo $siswa['Kelas']; ?></td>
                                                    <td><a href="?page=nilai&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><a href="?page=penghargaan&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><a href="?page=keaktifan&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><?php echo $prestasi['kredit_poin']; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($prestasi['status'] == 0) {
                                                        ?>
                                                            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-question-circle"></i></button>
                                                        <?php
                                                        } else if ($prestasi['status'] == 1) {
                                                        ?>
                                                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i></button>
                                                        <?php
                                                        } else if ($prestasi['status'] == 2) {
                                                        ?>
                                                            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-times-circle"></i></button>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i></button>
                                                        <?php
                                                        }
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
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
    <?php
    } else if ($_SESSION['login'] == 2) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Prestasi Siswa</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Nilai</th>
                                                <th>Penghargaan</th>
                                                <th>Keaktifan</th>
                                                <th>Kredit Poin</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $kelasQuery = mysql_query("SELECT * FROM guru WHERE id_user='$_SESSION[id_user]'");
                                            $kelas = mysql_fetch_array($kelasQuery);                                        
                                            $prestasiQuery = mysql_query("SELECT * FROM prestasi JOIN siswa ON siswa.id_siswa=prestasi.id_siswa WHERE siswa.Kelas='$kelas[Kelas]' ORDER BY siswa.Nama ASC");
                                            $i = 1;
                                            while ($prestasi = mysql_fetch_array($prestasiQuery)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                    </td>                                                                                                      
                                                    <td>
                                                        <?php
                                                        $siswaQuery = mysql_query("SELECT * FROM siswa where id_siswa='$prestasi[id_siswa]'");
                                                        $siswa = mysql_fetch_array($siswaQuery);
                                                        echo $siswa['Nama'];
                                                        ?>
                                                    </td>
                                                    <td><?php echo $siswa['Kelas']; ?></td>
                                                    <td><a href="?page=nilai&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><a href="?page=penghargaan&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><a href="?page=keaktifan&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><?php echo $prestasi['kredit_poin']; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($prestasi['status'] == 0) {
                                                        ?>
                                                            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-question-circle"></i></button>
                                                        <?php
                                                        } else if ($prestasi['status'] == 1) {
                                                        ?>
                                                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i></button>
                                                        <?php
                                                        } else if ($prestasi['status'] == 2) {
                                                        ?>
                                                            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-times-circle"></i></button>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i></button>
                                                        <?php
                                                        }
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
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
    <?php
    } else if ($_SESSION['login'] == 3) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Data Prestasi</strong>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $siswaQuery = mysql_query("SELECT * FROM siswa WHERE id_user='$_SESSION[id_user]'");
                                    $siswa = mysql_fetch_array($siswaQuery);
                                    $prestasiQuery = mysql_query("SELECT * FROM prestasi WHERE id_siswa='$siswa[id_siswa]'");
                                    $prestasi = mysql_fetch_array($prestasiQuery);
                                    ?>
                                    <div class="col-lg-6">
                                        <?php
                                        if ($prestasi['status'] == 0) {
                                            echo "<strong>Status</strong> : Belum Terverifikasi";
                                        }else if ($prestasi['status'] == 1) {
                                            echo "<strong>Status</strong> : Terverifikasi";
                                        }else if ($prestasi['status'] == 2) {
                                            echo "<strong>Status</strong> : Data Tidak Cocok";
                                        }else {
                                            echo "<strong>Status</strong> : Ditolak";
                                        }
                                        echo "<br><br><strong>Nama</strong>  : ".$siswa['Nama']."<br>";
                                        echo "<strong>NIS</strong>   : ".$siswa['NIS']."<br>";
                                        echo "<strong>Kelas</strong> : ".$siswa['Kelas'];
                                        ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="mx-auto d-block" src="images/siswa/<?php echo $image['image']; ?>" style="width:100px; height:100px;">
                                    </div>
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
                            </div>
                        </div>

                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
    <?php
    }else if ($_SESSION['login'] == 4) {
    ?>
        <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Prestasi Siswa</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Nilai</th>
                                                <th>Penghargaan</th>
                                                <th>Keaktifan</th>
                                                <th>Kredit Poin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                                        
                                            $prestasiQuery = mysql_query("SELECT * FROM prestasi JOIN siswa ON prestasi.id_siswa=siswa.id_siswa ORDER BY siswa.Nama ASC");
                                            $i = 1;
                                            while ($prestasi = mysql_fetch_array($prestasiQuery)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                    </td>                                                                                                      
                                                    <td>
                                                        <?php
                                                        $siswaQuery = mysql_query("SELECT * FROM siswa where id_siswa='$prestasi[id_siswa]'");
                                                        $siswa = mysql_fetch_array($siswaQuery);
                                                        echo $siswa['Nama'];
                                                        ?>
                                                    </td>
                                                    <td><?php echo $siswa['Kelas']; ?></td>
                                                    <td><a href="?page=nilai&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><a href="?page=penghargaan&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><a href="?page=keaktifan&id_siswa=<?php echo $siswa['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></button></a></td>
                                                    <td><?php echo $prestasi['kredit_poin']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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