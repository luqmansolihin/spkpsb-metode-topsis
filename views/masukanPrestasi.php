    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 3) {
    $id_siswa = mysql_fetch_array(mysql_query("SELECT id_siswa FROM siswa WHERE id_user = '$_SESSION[id_user]'"));
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Masukan Prestasi</strong>
                                </div>
                                <form action="systems/masukanPrestasi.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="card-body card-block">
                                        <input type="hidden" name="id_siswa" value="<?php echo $id_siswa['id_siswa']; ?>">                                        
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">Nilai Rata-Rata Semester 1</label></div>
                                            <div class="col-12 col-md-5"><input type="number" id="text-input" name="nilaiSemester1" placeholder="Masukan Nilai Rata-Rata Semester 1" class="form-control"><small class="help-block form-text">*Masukan Nilai Dalam Skala 0-100</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">Nilai Rata-Rata Semester 2</label></div>
                                            <div class="col-12 col-md-5"><input type="number" id="text-input" name="nilaiSemester2" placeholder="Masukan Nilai Rata-Rata Semester 2" class="form-control"><small class="help-block form-text">*Masukan Nilai Dalam Skala 0-100</small></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">Prestasi Kecamatan</label></div>
                                            <div class="col-12 col-md-5 presKec"><input type="text" id="text-input" name="presKec[]" placeholder="Masukan Prestasi Kecamatan" class="form-control"><small class="help-block form-text">*Masukan Nama Penghargaan</small></div>
                                            <div class="col col-md-4"></div>
                                            <div class="col-12 col-md-5">
                                                <button class="btn btn-danger btn-sm add_presKec">
                                                    <i class="fa fa-plus-circle"></i> Tambah
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">Prestasi Kota</label></div>
                                            <div class="col-12 col-md-5 presKot"><input type="text" id="text-input" name="presKot[]" placeholder="Masukan Prestasi Kota" class="form-control"><small class="help-block form-text">*Masukan Nama Penghargaan</small></div>
                                            <div class="col col-md-4"></div>
                                            <div class="col-12 col-md-5">
                                                <button class="btn btn-danger btn-sm add_presKot">
                                                    <i class="fa fa-plus-circle"></i> Tambah
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">Prestasi Nasional</label></div>
                                            <div class="col-12 col-md-5 presNas"><input type="text" id="text-input" name="presNas[]" placeholder="Masukan Prestasi Nasional" class="form-control"><small class="help-block form-text">*Masukan Nama Penghargaan</small></div>
                                            <div class="col col-md-4"></div>
                                            <div class="col-12 col-md-5">
                                                <button class="btn btn-danger btn-sm add_presNas">
                                                    <i class="fa fa-plus-circle"></i> Tambah
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label class=" form-control-label">Keaktifan Organisasi</label></div>
                                            <div class="col col-md-5">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <label for="checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox1" name="organisasi[]" value="Pengurus OSIS" class="form-check-input">Pengurus OSIS
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox2" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox2" name="organisasi[]" value="Pengurus Pramuka" class="form-check-input"> Pengurus Pramuka
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox3" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox3" name="organisasi[]" value="Pengurus ROHIS" class="form-check-input"> Pengurus ROHIS
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox4" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox4" name="organisasi[]" value="Pengurus Palang Merah Remaja" class="form-check-input"> Pengurus Palang Merah Remaja
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label class=" form-control-label">Keikutsertaan Ekstrakurikuler</label></div>
                                            <div class="col col-md-5">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <label for="checkbox5" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox5" name="ekstrakurikuler[]" value="Sepak Bola" class="form-check-input">Sepak Bola
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox6" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox6" name="ekstrakurikuler[]" value="Bola Voli" class="form-check-input"> Bola Voli
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox7" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox7" name="ekstrakurikuler[]" value="Basket" class="form-check-input"> Basket
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox8" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox8" name="ekstrakurikuler[]" value="Paskibraka" class="form-check-input"> Paskibraka
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox9" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox9" name="ekstrakurikuler[]" value="Bela Diri" class="form-check-input"> Bela Diri
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox10" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox10" name="ekstrakurikuler[]" value="Seni Hadrah" class="form-check-input"> Seni Hadrah
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox11" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox11" name="ekstrakurikuler[]" value="Baca Tulis Alquran" class="form-check-input"> Baca Tulis Alqur'an
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox12" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox12" name="ekstrakurikuler[]" value="Karawitan" class="form-check-input"> Karawitan
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox13" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox13" name="ekstrakurikuler[]" value="Seni Tari" class="form-check-input"> Seni Tari
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox14" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox14" name="ekstrakurikuler[]" value="Seni Musik" class="form-check-input"> Seni Musik
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox15" class="form-check-label ">
                                                            <input type="checkbox" id="checkbox15" name="ekstrakurikuler[]" value="KIR" class="form-check-input"> KIR
                                                        </label>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4"><label for="text-input" class=" form-control-label">Poin Tingkah Laku</label></div>
                                            <div class="col-12 col-md-5"><input type="number" id="text-input" name="poinTingkahLaku" placeholder="Masukan Nilai Poin Tingkah Laku" class="form-control"><small class="help-block form-text">*Masukan Nilai Dalam Skala 0-100</small></div>
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