<?php include "sesi.php";
include "../koneksi.php"; ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Sistem Informasi Administrasi Kependudukan - Kelurahan Pakualam</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name"><?php echo $_SESSION['nama'] ?></span><span class="user-status text-muted">Operator</span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="profil.php"><i class="bx bx-user mr-50"></i> Profil Saya</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="logout.php"><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
                        <div class="brand-logo"><img class="logo" src="../assets/logo.png" /></div>
                        <h2 class="brand-text mb-0">Pakualam</h2>
                    </a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
			<br>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" nav-item active"><a href="index.php"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="operator.php"><i class="menu-livicon" data-icon="pen"></i><span class="menu-title" data-i18n="Dashboard">List Data Operator</span></a>
                </li>
				<li class=" nav-item"><a href="penduduk.php"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="Dashboard">List Data Penduduk</span></a>
                </li>
				<li class=" nav-item"><a href="permohonan.php"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Dashboard">List Data Permohonan</span></a>
                </li>
				<li class=" nav-item"><a href="profil.php"><i class="menu-livicon" data-icon="gear"></i><span class="menu-title" data-i18n="Dashboard">Profil Saya</span></a>
                </li>
				<li class=" nav-item"><a href="logout.php"><i class="menu-livicon" data-icon="external-link"></i><span class="menu-title" data-i18n="Dashboard">Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-xl-12 col-12 dashboard-users">
                            <div class="row  ">
                                <!-- Statistics Cards Starts -->
                                <div class="col-12">
                                    <div class="row">
										<?php
											$query = mysql_query("select count(*) as hasil from operator");
											while ($row = mysql_fetch_array($query)) {
										?>
										<div class="col-sm-3 col-12 dashboard-users-danger">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                            <i class="bx bx-wrench font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">TOTAL DATA OPERATOR</div>
                                                        <h3 class="mb-0"><?php echo $row['hasil']; ?> Orang</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
										<?php
											$query = mysql_query("select count(*) as hasil from penduduk");
											while ($row = mysql_fetch_array($query)) {
										?>
                                        <div class="col-sm-3 col-12 dashboard-users-success">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                                            <i class="bx bx-user font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">TOTAL DATA PENDUDUK</div>
                                                        <h3 class="mb-0"><?php echo $row['hasil']; ?> Orang</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
										<?php
											$query = mysql_query("select count(*) as hasil from permohonan");
											while ($row = mysql_fetch_array($query)) {
										?>
										<div class="col-sm-3 col-12 dashboard-users-primary">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto mb-50">
                                                            <i class="bx bx-news font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">TOTAL DATA PERMOHONAN</div>
                                                        <h3 class="mb-0"><?php echo $row['hasil']; ?> Dokumen</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
										<?php
											$query = mysql_query("select count(*) as hasil from permohonan where status='SELESAI'");
											while ($row = mysql_fetch_array($query)) {
										?>
										<div class="col-sm-3 col-12 dashboard-users-danger">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto mb-50">
                                                            <i class="bx bx-task font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">TOTAL DOKUMEN TERBIT</div>
                                                        <h3 class="mb-0"><?php echo $row['hasil']; ?> Dokumen</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<?php } ?>
                                    </div>
                                </div>
                                <!-- Revenue Growth Chart Starts -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
    
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block"><?php echo date('Y') ?> &copy; Universitas Pamulang</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-bold-300" href="#" target="_blank">Kelompok 8</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <script src="../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>