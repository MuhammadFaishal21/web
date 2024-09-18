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
                <li class=" nav-item "><a href="index.php"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="operator.php"><i class="menu-livicon" data-icon="pen"></i><span class="menu-title" data-i18n="Dashboard">List Data Operator</span></a>
                </li>
				<li class=" nav-item"><a href="penduduk.php"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="Dashboard">List Data Penduduk</span></a>
                </li>
				<li class=" nav-item"><a href="permohonan.php"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Dashboard">List Data Permohonan</span></a>
                </li>
				<li class=" nav-item active"><a href="profil.php"><i class="menu-livicon" data-icon="gear"></i><span class="menu-title" data-i18n="Dashboard">Profil Saya</span></a>
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
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Profil Saya</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-tabs-components">
					<?php 
								function randpass($length){
								//    karakter yang bisa dipakai sebagai password
								$string = "abcdefghijklmnopqrstuvwxyz1234567890";
								$len = strlen($string);
								$pass = "";
								//    mengenerate password
								for($i=1;$i<=$length; $i++){
									$start = rand(0, $len);
									$pass  .= substr($string, $start, 1);
								}
								return $pass;
								}

								if(isset($_POST['bio'])){
									$nama	 		= $_POST['nama'];
									$email			= $_POST['email'];
									$no_hp			= $_POST['no_hp'];
									$input  		= "update operator set nama ='" . $nama . "', email ='" . $email . "', no_hp ='" . $no_hp . "' where id_operator ='" . $_SESSION['id_operator'] . "'";
									$query_input 	= mysql_query($input);
									if($query_input) {
									$sukses 		= "<div class='alert alert-success' align='center' role='alert'><strong>Well done! </strong>Data Profil berhasil dirubah</div>";
									} else $gagal 	= "<div class='alert alert-danger' align='center' role='alert'><strong>Oh snap! </strong>ubah data Profil GAGAL ! Mohon periksa kembali</div>".mysql_error();
								}

								if(!empty($_POST['currentPassword'])){

									$result = mysql_query("select * from operator where id_operator ='". $_SESSION['id_operator'] ."'");

									$row=mysql_fetch_array($result);

									$password = md5($_POST["currentPassword"]);

									$newpassword = md5($_POST["newPassword"]);

									if($password == $row["password"]) {

									mysql_query("update operator set password='" . $newpassword . "' where id_operator ='". $_SESSION['id_operator'] ."'");

									$sukses = "<div class='alert alert-success' align='center' role='alert'><strong>Well done! </strong>password anda berhasil diupdate</div>";

									} else $gagal = "<div class='alert alert-danger' align='center' role='alert'><strong>Oh snap! </strong>Password lama anda SALAH ! Mohon ulangi kembali</div>";

								}
					if(isset($sukses)) { echo $sukses; }
					if(isset($gagal)) { echo $gagal; } 
					?>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">
                                            <i class="bx bx-user align-middle"></i>
                                            <span class="align-middle">Profil</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">
                                            <i class="bx bx-key align-middle"></i>
                                            <span class="align-middle">Password</span>
                                        </a>
                                    </li>
                                </ul>
								<?php
									$no = 0;
									$query = mysql_query("select * from operator where id_operator='". $_SESSION['id_operator'] ."'");
									while ($row = mysql_fetch_array($query)) {
									$no++;
								?>
                                <div class="tab-content">
                                    <div class="tab-pane active col-6" id="home" aria-labelledby="home-tab" role="tabpanel">
										<form action="" method="post">
                                        <div class="modal-body">
											<fieldset class="form-group">
												<label for="basicInput">Nama Operator</label>
												<input type="text" class="form-control" id="basicInput" name="nama" value="<?php echo $row['nama']; ?>" placeholder="isi nama lengkap operator">
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Alamat Email</label>
												<input type="email" class="form-control" id="basicInput" name="email" value="<?php echo $row['email']; ?>" placeholder="isi alamat email operator">
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Nomor Ponsel</label>
												<input type="text" class="form-control" id="basicInput" name="no_hp" value="<?php echo $row['no_hp']; ?>" placeholder="isi nomor ponsel operator">
											</fieldset>
										</div>
										<div class="modal-footer">
											<button type="submit" name="bio" class="btn btn-primary ml-1" >
												<i class="bx bx-check d-block d-sm-none"></i>
												<span class="d-none d-sm-block">Update</span>
											</button>
										</div>
										</form>
                                    </div>
                                    <div class="tab-pane col-6" id="profile" aria-labelledby="profile-tab" role="tabpanel">
										<form action="" method="post">
                                        <div class="modal-body">
											<fieldset class="form-group">
												<label for="basicInput">Password Lama</label>
												<input type="password" class="form-control" id="basicInput" name="currentPassword" placeholder="isi kata sandi lama anda">
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Password Baru</label>
												<input type="password" class="form-control" id="basicInput" name="newPassword" placeholder="isi kata sandi baru anda">
											</fieldset>
											<fieldset class="form-group">
												<label for="basicInput">Ulangi Password Baru</label>
												<input type="password" class="form-control" id="basicInput" name="" placeholder="isi kembali kata sandi baru anda" required>
											</fieldset>
										</div>
										<div class="modal-footer">
											<button type="submit" name="pass" class="btn btn-primary ml-1" >
												<i class="bx bx-check d-block d-sm-none"></i>
												<span class="d-none d-sm-block">Ganti</span>
											</button>
										</div>
										</form>
                                    </div>
                                </div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <script src="../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/navs/navs.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>