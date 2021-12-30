    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            $image = mysql_fetch_array(mysql_query("SELECT image FROM user WHERE id_user='$_SESSION[id_user]'"));
                            if ($_SESSION['login'] == 1) {
                            ?>
                                <img class="user-avatar rounded-circle" src="images/admin/<?php echo $image['image']; ?>" alt="User Avatar">        
                            <?php
                            }else if ($_SESSION['login'] == 2) {
                            ?>
                                <img class="user-avatar rounded-circle" src="images/guru/<?php echo $image['image']; ?>" alt="User Avatar">        
                            <?php
                            }else if ($_SESSION['login'] == 3) {
                            ?>
                                <img class="user-avatar rounded-circle" src="images/siswa/<?php echo $image['image']; ?>" alt="User Avatar">        
                            <?php
                            }else if ($_SESSION['login'] == 4) {
                            ?>
                                <img class="user-avatar rounded-circle" src="images/kepsek/<?php echo $image['image']; ?>" alt="User Avatar">        
                            <?php
                            }
                            ?>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="?page=pengaturanAkun"><i class="fa fa-cog"></i> Pengaturan Akun</a>

                            <a class="nav-link" href="login/controllers/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Control Panel</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if  (isset($_GET['page'])) {
            $page = $_GET['page'];
            if(file_exists('views/'.$page.'.php')){
                include 'views/'.$page.'.php';
            } else {
                include 'views/404.php';
            }            
        } else {
            include 'views/home.php';
        }
        ?>