    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 4) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Siswa Belum Memasukan Prestasi</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>                                                
                                                <th>Kelas</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $siswaQuery = mysql_query("SELECT * FROM siswa WHERE NOT EXISTS (SELECT * FROM prestasi WHERE siswa.id_siswa = prestasi.id_siswa) ORDER BY siswa.Nama ASC");
                                            $i = 1;
                                            while ($siswa = mysql_fetch_array($siswaQuery)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; $i++; ?></td>                                                    
                                                    <td><?php echo $siswa['NIS']; ?></td>
                                                    <td><?php echo $siswa['Nama']; ?></td>
                                                    <td><?php echo $siswa['Kelas']; ?></td>
                                                    <td>
                                                        <?php
                                                        $akunQuery = mysql_query("SELECT * FROM user WHERE id_user='$siswa[id_user]'");
                                                        $akun = mysql_fetch_array($akunQuery);
                                                        if ($akun['status'] == 'aktif') {
                                                        ?>
                                                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-unlock"></i>&nbsp;Aktif</button>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-lock"></i>&nbsp;Nonaktif</button>
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
    }else {
        include '404.php';
    }
    ?>