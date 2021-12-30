    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 1 OR $_SESSION['login'] == 2 OR $_SESSION['login'] == 4) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Hasil Seleksi</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <?php
                                            if ($_SESSION['login'] == 1 OR $_SESSION['login'] == 4){
                                            ?>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kelas</th>
                                                    <th>Positif</th>
                                                    <th>Negatif</th>
                                                    <th>Total</th>
                                                    <th>Peringkat</th>
                                                </tr>
                                            <?php
                                            } else if ($_SESSION['login'] == 2){
                                            ?>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kelas</th>
                                                    <th>Total</th>
                                                    <th>Peringkat</th>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($_SESSION['login'] == 1 OR $_SESSION['login'] == 4){
                                                $hasilQuery = mysql_query("SELECT * FROM hasil JOIN siswa ON hasil.id_siswa = siswa.id_siswa ORDER BY peringkat ASC");                                                
                                                $i = 1;
                                                while ($hasil = mysql_fetch_array($hasilQuery)) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php                                                            
                                                            echo $i;
                                                            $i++;
                                                            ?>
                                                        </td>
                                                        <td><?php echo $hasil['Nama']?></td>
                                                        <td><?php echo $hasil['Kelas']; ?></td>
                                                        <td><?php echo number_format($hasil['positif'], 7); ?></td>
                                                        <td><?php echo number_format($hasil['negatif'], 7); ?></td>
                                                        <td><?php echo number_format($hasil['preferensi'], 7); ?></td>
                                                        <td><?php echo $hasil['peringkat']; ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            } else if ($_SESSION['login'] == 2) {
                                                $kelasQuery = mysql_query("SELECT * FROM guru WHERE id_user='$_SESSION[id_user]'");
                                                $kelas = mysql_fetch_array($kelasQuery);
                                                $hasilQuery = mysql_query("SELECT siswa.Nama, siswa.Kelas, hasil.preferensi, hasil.peringkat FROM hasil JOIN siswa ON hasil.id_siswa = siswa.id_siswa WHERE siswa.Kelas = '$kelas[Kelas]' ORDER BY peringkat ASC");                                                
                                                $i = 1;
                                                while ($hasil = mysql_fetch_array($hasilQuery)) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php                                                            
                                                            echo $i;
                                                            $i++;
                                                            ?>
                                                        </td>
                                                        <td><?php echo $hasil['Nama']?></td>
                                                        <td><?php echo $hasil['Kelas']; ?></td>
                                                        <td><?php echo $hasil['preferensi']; ?></td>
                                                        <td><?php echo $hasil['peringkat']; ?></td>
                                                    </tr>
                                            <?php
                                                }
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
    }else if ($_SESSION['login'] == 3) {
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Hasil Seleksi</strong>
                                </div>
                                <div class="card-body">
                                    <?php
                                    $siswaQuery = mysql_query("SELECT * FROM siswa WHERE id_user='$_SESSION[id_user]'");
                                    $siswa = mysql_fetch_array($siswaQuery);
                                    $hasilQuery = mysql_query("SELECT * FROM hasil WHERE id_siswa='$siswa[id_siswa]'");
                                    $hasil = mysql_fetch_array($hasilQuery);
                                    ?>
                                    <div class="col-lg-6">
                                        <?php
                                        echo "<strong>Nama</strong>  : ".$siswa['Nama']."<br>";
                                        echo "<strong>NIS</strong>   : ".$siswa['NIS']."<br>";
                                        echo "<strong>Kelas</strong> : ".$siswa['Kelas'];
                                        ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="mx-auto d-block" src="images/siswa/<?php echo $image['image']?>" style="width:100px; height:100px;">
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
                                                <th scope="col">Total Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"><?php echo $hasil['preferensi']; ?></td>
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
                                                <th scope="col">Peringkat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"><?php echo $hasil['peringkat']; ?></td>
                                            </tr>                                            
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