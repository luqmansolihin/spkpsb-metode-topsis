    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 1){
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Hitung Seleksi</strong>
                                </div>
                                <div class="card-body">
                                    <div class="vue-list">
                                        <div class="col-md-12">    
                                            <ol class="vue-ordered">
                                                <li>Atur Bobot Seleksi terlebih dahulu pada menu 'Pengaturan Bobot Seleksi'.</li>
                                                <li>Pada menu ini akan dilakukan perhitungan dari Data Prestasi yang sudah Terverifikasi.</li>
                                                <li>Klik "Simpan" setelah dilakukan perhitungan.</li>
                                                <li>Silahkan lihat hasil penghitungan pada Menu "Lihat Hasil Seleksi".</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="systems/seleksi.php">
                                        <button type="submit" class="btn-block btn-primary btn-sm">
                                            KLIK UNTUK LAKUKAN SELEKSI
                                        </button>
                                    </a>
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