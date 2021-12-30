<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <?php
                if ($_SESSION['login'] == 1) {
                ?>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="?page=home"> <i class="menu-icon fa fa-home"></i>Home </a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Masukan Data</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-user"></i><a href="?page=masukanGuru">Masukan Data Guru</a></li>
                                <li><i class="fa fa-user"></i><a href="?page=masukanSiswa">Masukan Data Siswa</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-desktop"></i>Lihat Data</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="?page=dataGuru">Lihat Data Guru</a></li>
                                <li><i class="fa fa-table"></i><a href="?page=dataSiswa">Lihat Data Siswa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=dataPrestasi"> <i class="menu-icon fa fa-th-list"></i>Lihat Data Prestasi </a>
                        </li>
                        <li>
                            <a href="?page=hitungSeleksi"> <i class="menu-icon fa fa-magic"></i>Hitung Seleksi </a>
                        </li>
                        <li>
                            <a href="?page=hasil"> <i class="menu-icon fa fa-trophy"></i>Lihat Hasil Seleksi </a>
                        </li>
                        <li>
                            <a href="?page=bobot"> <i class="menu-icon fa fa-gears"></i>Pengaturan Bobot Seleksi </a>
                        </li>
                    </ul>
                <?php
                } else if ($_SESSION['login'] == 2) {
                ?>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="?page=home"> <i class="menu-icon fa fa-home"></i>Home </a>
                        </li>
                        <li>
                            <a href="?page=dataSiswa"> <i class="menu-icon fa fa-table"></i>Lihat Data Siswa </a>
                        </li>
                        <li>
                            <a href="?page=dataPrestasi"> <i class="menu-icon fa fa-th-list"></i>Lihat Data Prestasi </a>
                        </li>
                        <li>
                            <a href="?page=verifikasi"> <i class="menu-icon fa fa-check-square"></i>Verifikasi Data Prestasi </a>
                        </li>
                        <li>
                            <a href="?page=hasil"> <i class="menu-icon fa fa-trophy"></i>Lihat Hasil Seleksi </a>
                        </li>
                    </ul>
                <?php
                } else if ($_SESSION['login'] == 3) {
                ?>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="?page=home"> <i class="menu-icon fa fa-home"></i>Home </a>
                        </li>
                        <li>
                            <a href="?page=masukanPrestasi"> <i class="menu-icon fa fa-pencil"></i>Masukkan Data Prestasi </a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Bukti Penghargaan</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-image"></i><a href="?page=prestasiKecamatan">Tingkat Kecamatan</a></li>
                                <li><i class="fa fa-image"></i><a href="?page=prestasiKota">Tingkat Kota</a></li>
                                <li><i class="fa fa-image"></i><a href="?page=prestasiNasional">Tingkat Nasional</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=perbaikanPrestasi"> <i class="menu-icon fa fa-pencil-square-o"></i>Edit Data Prestasi </a>
                        </li>
                        <li>
                            <a href="?page=dataPrestasi"> <i class="menu-icon fa fa-th-list"></i>Lihat Data Prestasi </a>
                        </li>
                        <li>
                            <a href="?page=hasil"> <i class="menu-icon fa fa-trophy"></i>Lihat Hasil Seleksi </a>
                        </li>
                    </ul>
                <?php
                } else if ($_SESSION['login'] == 4) {
                ?>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="?page=home"> <i class="menu-icon fa fa-home"></i>Home </a>
                        </li>
                        <li>
                            <a href="?page=dataPrestasi"> <i class="menu-icon fa fa-th-list"></i>Lihat Data Prestasi </a>
                        </li>
                        <li>
                            <a href="?page=prestasiBelumMasuk"> <i class="menu-icon fa fa-th-list"></i>Data Siswa Belum Masuk </a>
                        </li>
                        <li>
                            <a href="?page=prestasiBelumTerverifikasi"> <i class="menu-icon fa fa-th-list"></i>Data Siswa Belum Terverifikasi </a>
                        </li>
                        <li>
                            <a href="?page=prestasiDitolak"> <i class="menu-icon fa fa-th-list"></i>Data Siswa Ditolak </a>
                        </li>
                        <li>
                            <a href="?page=prestasiTidakCocok"> <i class="menu-icon fa fa-th-list"></i>Data Siswa Tidak Cocok </a>
                        </li>
                        <li>
                            <a href="?page=hasil"> <i class="menu-icon fa fa-trophy"></i>Lihat Hasil Seleksi </a>
                        </li>
                    </ul>                
                <?php
                }
                ?>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->