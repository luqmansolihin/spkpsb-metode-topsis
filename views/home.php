    <?php
    require 'drone.php';
    ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="ui-typography">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Home</strong>
                                </div>
                                <div class="card-body">
                                    <div style="border-bottom-width: 2px; border-bottom-style: dashed; border-bottom-color: rgb(0, 0, 0); margin-bottom: 30px; padding-bottom: 10px;">
                                        Selamat datang kembali,
                                        <strong> 
                                            <?php
                                            if ($_SESSION['login'] == 1) {
                                                $admin = mysql_fetch_array(mysql_query("SELECT * FROM admin WHERE id_user='$_SESSION[id_user]'"));
                                                echo $admin['Nama'];
                                            }else if ($_SESSION['login'] == 2) {
                                                $guru = mysql_fetch_array(mysql_query("SELECT * FROM guru WHERE id_user='$_SESSION[id_user]'"));
                                                echo $guru['Nama'];
                                            }else if ($_SESSION['login'] == 3) {
                                                $siswa = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE id_user='$_SESSION[id_user]'"));
                                                echo $siswa['Nama'];
                                            }else {
                                                $kepsek = mysql_fetch_array(mysql_query("SELECT * FROM kepsek WHERE id_user='$_SESSION[id_user]'"));
                                                echo $kepsek['Nama'];
                                            }
                                            ?> 
                                        </strong>
                                    </div>                                    
                                    <span class="badge badge-primary">
                                        <?php
                                            $levelQuery = mysql_query("SELECT * from user_level WHERE id_level = '$_SESSION[login]'");
                                            $level = mysql_fetch_array($levelQuery);
                                            echo "Login sebagai ".$level['level'];
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->