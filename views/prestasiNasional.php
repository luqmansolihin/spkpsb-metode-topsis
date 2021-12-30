    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 3) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Data Prestasi Nasional</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Bukti Penghargaan</th>
                                                <th>Unggah Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $siswaQuery = mysql_query("SELECT * FROM siswa WHERE id_user='$_SESSION[id_user]'");
                                            $siswa = mysql_fetch_array($siswaQuery);
                                            $prestasiQuery = mysql_query("SELECT * FROM presnas WHERE id_siswa = '$siswa[id_siswa]'");
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
                                                    <td><?php echo $prestasi['nama_presnas']; ?></td>
                                                    <td>
                                                        <?php
                                                        echo "<img src='images/presnas/$prestasi[foto_presnas]' style='width:100px; height:auto;'>";
                                                        ?>
                                                    </td>
                                                    <form action="systems/buktiPresNas.php" method="POST" enctype="multipart/form-data">
                                                        <td>
                                                            <input type="hidden" name="id_presnas" value="<?php echo $prestasi['id_presnas']; ?>">
                                                            <input type="file" name="foto_presnas" class="form-control-file">
                                                        </td>
                                                        <td>                                                        
                                                            <a href="systems/hapusPresNas.php?id_presnas=<?php echo $prestasi['id_presnas'];?>" onclick="return confirm('Yakin Hapus Prestasi <?php echo $prestasi['nama_presnas']; ?>?')"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button></a>
                                                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i>Simpan</button>                                                        
                                                        </td>
                                                    </form>
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