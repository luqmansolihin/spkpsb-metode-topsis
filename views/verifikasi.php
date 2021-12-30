    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 2) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Verifikasi Prestasi Siswa</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $kelasQuery = mysql_query("SELECT * FROM guru WHERE id_user='$_SESSION[id_user]'");
                                            $kelas = mysql_fetch_array($kelasQuery);
                                            $prestasiQuery = mysql_query("SELECT * FROM prestasi JOIN siswa ON siswa.id_siswa = prestasi.id_siswa WHERE kelas='$kelas[Kelas]' ORDER BY NIS ASC");
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
                                                    <td><?php echo $prestasi['Nama']; ?></td>
                                                    <td><?php echo $prestasi['Kelas']; ?></td>
                                                    <td>
                                                        <?php
                                                        if ($prestasi['status'] == 0) {
                                                        ?>
                                                            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-question-circle"></i>&nbsp;Belum Terverifikasi</button>
                                                        <?php
                                                        } else if ($prestasi['status'] == 1) {
                                                        ?>
                                                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i>&nbsp;Terverifikasi</button>
                                                        <?php
                                                        } else if ($prestasi['status'] == 2) {
                                                        ?>
                                                            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-times-circle">&nbsp;Data Tidak Cocok</i></button>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i>&nbsp;Ditolak</button>
                                                        <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($prestasi['status'] == 0) {
                                                        ?>
                                                            <a href="?page=detailPrestasi&id_siswa=<?php echo $prestasi['id_siswa']?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i>&nbsp;Verifikasi</button></a>
                                                            <a href="systems/tolakPrestasi.php?id_siswa=<?php echo $prestasi['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i>&nbsp;Tolak</button></a>
                                                        <?php
                                                        } else if ($prestasi['status'] == 1) {
                                                        ?>                                                            
                                                            <a href="systems/batalkanPrestasi.php?id_siswa=<?php echo $prestasi['id_siswa']?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-question-circle"></i>&nbsp;Batalkan Verifikasi</button></a>
                                                            <a href="systems/tolakPrestasi.php?id_siswa=<?php echo $prestasi['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i>&nbsp;Tolak</button></a>
                                                        <?php
                                                        } else if ($prestasi['status'] == 2) {
                                                        ?>
                                                            <a href="?page=detailPrestasi&id_siswa=<?php echo $prestasi['id_siswa']?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i>&nbsp;Verifikasi</button></a>
                                                            <a href="systems/tolakPrestasi.php?id_siswa=<?php echo $prestasi['id_siswa']?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i>&nbsp;Tolak</button></a>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <a href="?page=detailPrestasi&id_siswa=<?php echo $prestasi['id_siswa']?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i>&nbsp;Verifikasi</button></a>
                                                            <a href="systems/batalkanPrestasi.php?id_siswa=<?php echo $prestasi['id_siswa']?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-question-circle"></i>&nbsp;Batalkan Verifikasi</button></a>
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
    } else {
        include '404.php';
    }
    ?>