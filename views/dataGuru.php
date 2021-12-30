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
                                    <strong class="card-title">Data Guru</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIP</th>
                                                <th>Kelas</th>
                                                <th>Username</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $guruQuery = mysql_query("SELECT * FROM guru");
                                            while ($guru = mysql_fetch_array($guruQuery)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $guru['Nama']; ?></td>
                                                    <td><?php echo $guru['NIP']; ?></td>
                                                    <td><?php echo $guru['Kelas']; ?></td>
                                                    <td>
                                                        <?php 
                                                            $akunQuery = mysql_query("SELECT * FROM user WHERE id_user = '$guru[id_user]'");
                                                            $akun = mysql_fetch_array($akunQuery);
                                                            echo $akun['username'];
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
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
                                                    <td>
                                                    <?php 
                                                        if ($akun['status'] == 'aktif') {
                                                        ?>
                                                            <a href="systems/nonaktifGuru.php?id_user=<?php echo $akun['id_user']; ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-lock"></i>&nbsp;Nonaktif</button></a>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <a href="systems/aktifGuru.php?id_user=<?php echo $akun['id_user']; ?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-unlock"></i>&nbsp;Aktif</button></a>
                                                        <?php
                                                        }
                                                        ?>
                                                        <a href="?page=ubahGuru&id_user=<?php echo $akun['id_user']; ?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i>&nbsp;Ubah</button></a>
                                                        <a href="systems/hapusGuru.php?id_user=<?php echo $akun['id_user']; ?>" onclick="return confirm('Yakin ingin menghapus?')"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Hapus</button></a>
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