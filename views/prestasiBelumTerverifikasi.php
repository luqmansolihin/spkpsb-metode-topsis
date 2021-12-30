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
                                    <strong class="card-title">Data Prestasi Siswa Belum Terverifikasi</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Wali Kelas</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                                        
                                            $prestasiQuery = mysql_query("SELECT * FROM prestasi JOIN siswa ON prestasi.id_siswa=siswa.id_siswa WHERE prestasi.status='0' ORDER BY siswa.NIS ASC");
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
                                                    <td><?php echo $prestasi['NIS']; ?></td>
                                                    <td><?php echo $prestasi['Nama']; ?></td>
                                                    <td><?php echo $prestasi['Kelas']; ?></td>
                                                    <td>
                                                        <?php
                                                        $guru = mysql_fetch_array(mysql_query("SELECT * FROM guru WHERE Kelas='$prestasi[Kelas]'"));
                                                        echo $guru['Nama'];
                                                        ?>
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-question-circle"></i></button></td>
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