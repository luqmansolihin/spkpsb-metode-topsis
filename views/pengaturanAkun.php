    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 1) {
        $id_user = $_SESSION['id_user'];
        $adminQuery = mysql_query("SELECT * FROM admin WHERE id_user=$id_user");
        $admin = mysql_fetch_array($adminQuery);
        $akunQuery = mysql_query("SELECT * FROM user WHERE id_user=$id_user");
        $akun = mysql_fetch_array($akunQuery);
    ?>    
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Pengaturan Akun</strong>
                                </div>
                                <form action="systems/pengaturanAkun.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="card-body card-block">
                                        <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                                        <div class="row form-group">
                                            <div class="col col-md-2"><img class="user-avatar" src="images/admin/<?php echo $image['image']; ?>" alt="User Avatar"></div>
                                            <div class="col-12 col-md-5"><input type="file" name="foto"><small class="help-block form-text">*Format gambar JPG/JPEG/PNG</small><small class="help-block form-text">*Ukuran gambar maksimal 1 MB</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $admin['Nama']; ?>" required></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="email-input" class=" form-control-label">Username</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo $akun['username']; ?>" disabled></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="password-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-5"><input type="password" id="password-input" name="password" placeholder="Masukan Password" class="form-control" value="<?php echo $akun['password']; ?>" required><small class="help-block form-text">*Gunakan 8 karakter dengan kombinasi huruf dan angka</small></div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
    <?php
    }else if ($_SESSION['login'] == 2) {
        $id_user = $_SESSION['id_user'];
        $guruQuery = mysql_query("SELECT * FROM guru WHERE id_user=$id_user");
        $guru = mysql_fetch_array($guruQuery);
        $akunQuery = mysql_query("SELECT * FROM user WHERE id_user=$id_user");
        $akun = mysql_fetch_array($akunQuery);
    ?>    
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Pengaturan Akun</strong>
                                </div>
                                <form action="systems/pengaturanAkun.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="card-body card-block">
                                        <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                                        <div class="row form-group">
                                            <div class="col col-md-2"><img class="user-avatar" src="images/guru/<?php echo $image['image']; ?>" alt="User Avatar"></div>
                                            <div class="col-12 col-md-5"><input type="file" name="foto"><small class="help-block form-text">*Format gambar JPG/JPEG/PNG</small><small class="help-block form-text">*Ukuran gambar maksimal 1 MB</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $guru['Nama']; ?>" required></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="email-input" class=" form-control-label">Username</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo $akun['username']; ?>" disabled></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="password-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-5"><input type="password" id="password-input" name="password" placeholder="Masukan Password" class="form-control" value="<?php echo $akun['password']; ?>" required><small class="help-block form-text">*Gunakan 8 karakter dengan kombinasi huruf dan angka</small></div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
    <?php
    }else if ($_SESSION['login'] == 3) {
        $id_user = $_SESSION['id_user'];
        $siswaQuery = mysql_query("SELECT * FROM siswa WHERE id_user=$id_user");
        $siswa = mysql_fetch_array($siswaQuery);
        $akunQuery = mysql_query("SELECT * FROM user WHERE id_user=$id_user");
        $akun = mysql_fetch_array($akunQuery);
    ?>    
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Pengaturan Akun</strong>
                                </div>
                                <form action="systems/pengaturanAkun.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="card-body card-block">
                                        <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                                        <div class="row form-group">
                                            <div class="col col-md-2"><img class="user-avatar" src="images/siswa/<?php echo $image['image']; ?>" alt="User Avatar"></div>
                                            <div class="col-12 col-md-5"><input type="file" name="foto"><small class="help-block form-text">*Format gambar JPG/JPEG/PNG</small><small class="help-block form-text">*Ukuran gambar maksimal 1 MB</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $siswa['Nama']; ?>" required></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="email-input" class=" form-control-label">Username</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo $akun['username']; ?>" disabled></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="password-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-5"><input type="password" id="password-input" name="password" placeholder="Masukan Password" class="form-control" value="<?php echo $akun['password']; ?>" required><small class="help-block form-text">*Gunakan 8 karakter dengan kombinasi huruf dan angka</small></div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
    <?php
    }else if ($_SESSION['login'] == 4) {
        $id_user = $_SESSION['id_user'];
        $kepsekQuery = mysql_query("SELECT * FROM kepsek WHERE id_user=$id_user");
        $kepsek = mysql_fetch_array($kepsekQuery);
        $akunQuery = mysql_query("SELECT * FROM user WHERE id_user=$id_user");
        $akun = mysql_fetch_array($akunQuery);
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Pengaturan Akun</strong>
                                </div>
                                <form action="systems/pengaturanAkun.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="card-body card-block">
                                        <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                                        <div class="row form-group">
                                            <div class="col col-md-2"><img class="user-avatar" src="images/kepsek/<?php echo $image['image']; ?>" alt="User Avatar"></div>
                                            <div class="col-12 col-md-5"><input type="file" name="foto"><small class="help-block form-text">*Format gambar JPG/JPEG/PNG</small><small class="help-block form-text">*Ukuran gambar maksimal 1 MB</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $kepsek['Nama']; ?>" required></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="email-input" class=" form-control-label">Username</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo $akun['username']; ?>" disabled></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="password-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-5"><input type="password" id="password-input" name="password" placeholder="Masukan Password" class="form-control" value="<?php echo $akun['password']; ?>" required><small class="help-block form-text">*Gunakan 8 karakter dengan kombinasi huruf dan angka</small></div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
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