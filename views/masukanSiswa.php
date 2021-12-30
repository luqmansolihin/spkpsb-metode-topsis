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
                                    <strong>Masukan Data Siswa</strong>
                                </div>
                                <form action="systems/masukanSiswa.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">NIS</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="nis" placeholder="Masukan NIS" class="form-control" required></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Nama</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="nama" placeholder="Masukan Nama" class="form-control" required></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="multiple-select" class=" form-control-label">Kelas</label></div>
                                            <div class="col col-md-5">
                                                <select name="kelas" id="multiple-select" multiple="" class="form-control" required>
                                                    <option value="7A">Kelas 7A</option>
                                                    <option value="7B">Kelas 7B</option>
                                                    <option value="7C">Kelas 7C</option>
                                                    <option value="7D">Kelas 7D</option>
                                                    <option value="7E">Kelas 7E</option>
                                                    <option value="7F">Kelas 7F</option>
                                                    <option value="7G">Kelas 7G</option>
                                                    <option value="8A">Kelas 8A</option>
                                                    <option value="8B">Kelas 8B</option>
                                                    <option value="8C">Kelas 8C</option>
                                                    <option value="8D">Kelas 8D</option>
                                                    <option value="8E">Kelas 8E</option>
                                                    <option value="8F">Kelas 8F</option>
                                                    <option value="8G">Kelas 8G</option>
                                                    <option value="9A">Kelas 9A</option>
                                                    <option value="9B">Kelas 9B</option>
                                                    <option value="9C">Kelas 9C</option>
                                                    <option value="9D">Kelas 9D</option>
                                                    <option value="9E">Kelas 9E</option>
                                                    <option value="9F">Kelas 9F</option>
                                                    <option value="9G">Kelas 9G</option>
                                                </select>
                                                <small class="help-block form-text">*Pilih salah satu kelas saat ini</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="email-input" class=" form-control-label">Username</label></div>
                                            <div class="col-12 col-md-5"><input type="text" id="text-input" name="username" placeholder="Masukan Username" class="form-control" required><small class="help-block form-text">*Masukan username digunakan untuk login</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2"><label for="password-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-5"><input type="password" id="password-input" name="password" placeholder="Masukan Password" class="form-control" required><small class="help-block form-text">*Gunakan 8 karakter dengan kombinasi huruf dan angka</small></div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
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
    } else {
        include '404.php';
    }
    ?>