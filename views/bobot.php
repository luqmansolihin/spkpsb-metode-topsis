    <?php
    require 'drone.php';
    if ($_SESSION['login'] == 1) {
        $bobotQuery = mysql_query("SELECT * FROM bobot");
    ?>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Bobot Seleksi</strong>
                                </div>
                                <form action="systems/bobot.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="card-body card-block">
                                        <?php
                                        while ($bobot = mysql_fetch_array($bobotQuery)) {
                                        ?>
                                            <div class="row form-group">
                                                <div class="col col-md-4"><label for="text-input" class=" form-control-label"><?php echo 'Bobot '.$bobot['kriteria']; ?></label></div>
                                                <div class="col-12 col-md-5"><input type="number" id="text-input" name="<?php echo $bobot['id_bobot']; ?>" value="<?php echo $bobot['bobot']; ?>" placeholder="<?php echo 'Masukan Bobot '.$bobot['kriteria']; ?>" class="form-control"><small class="help-block form-text">*Atur bobot sesuai dengan kebutuhan</small></div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <input type="hidden" name="id_bobot" value="<?php echo $bobot['id_bobot']?>">
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
    } else {
        include '404.php';
    }
    ?>