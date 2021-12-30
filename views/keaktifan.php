    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 1 OR $_SESSION['login'] == 2 OR $_SESSION['login'] == 4){
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Data Keaktifan Siswa</strong>
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