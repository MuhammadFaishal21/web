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
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/datatables.min.css">
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
                <li class=" nav-item active"><a href="operator.php"><i class="menu-livicon" data-icon="pen"></i><span class="menu-title" data-i18n="Dashboard">List Data Operator</span></a>
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
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">List Data Operator</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="headers">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
										<button type="button" class="btn btn-primary glow mr-1 mb-1" data-toggle="modal" data-target="#tambah"><i class="bx bx-plus-circle"></i><span class="align-middle ml-25">TAMBAH DATA OPERATOR</span></button>
										<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Tambah Data Operator</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">
                                                    	<fieldset class="form-group">
															<label for="basicInput">Nama Operator</label>
															<input type="text" class="form-control" id="basicInput" name="nama" placeholder="isi nama lengkap operator">
														</fieldset>
                                                    	<fieldset class="form-group">
															<label for="basicInput">Alamat Email</label>
															<input type="email" class="form-control" id="basicInput" name="email" placeholder="isi alamat email operator">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Nomor Ponsel</label>
															<input type="text" class="form-control" id="basicInput" name="no_hp" placeholder="isi nomor ponsel operator">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Password</label>
															<input type="password" class="form-control" id="basicInput" name="password" placeholder="isi kata sandi operator">
														</fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                        <button type="submit" name="tambah" class="btn btn-primary ml-1" >
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Simpan</span>
                                                    	</button>
                                                    </div>
                                            	</div>
                                            </div>
											</form>
                                    	</div>
									</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
										<?php 					
											function tanggal_indo($tanggal)
											{
												$bulan = array (1 =>   'Januari',
															'Februari',
															'Maret',
															'April',
															'Mei',
															'Juni',
															'Juli',
															'Agustus',
															'September',
															'Oktober',
															'November',
															'Desember'
														);
												$split = explode('-', $tanggal);
												return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
											}

														if(isset($_POST['tambah'])){
															$nama	 		= $_POST['nama'];
															$email 			= $_POST['email'];
															$no_hp	 		= $_POST['no_hp'];
															$password		= md5($_POST['password']);
															$input  		= "insert into operator (nama, no_hp, email, password) values ('$nama','$no_hp','$email','$password')";
															$query_input 	= mysql_query($input);
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Data Operator <strong>$nama</strong> berhasil tersimpan di database.</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Tambah Data Operator GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}

														if(isset($_POST['hapus'])){
															$id_operator	= $_POST['id_operator'];
															$nama	 		= $_POST['nama'];
															$input  		= "delete from operator where id_operator ='$id_operator'";
															$query_input 	= mysql_query($input);
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Data Operator <strong>$nama</strong> berhasil dihapus dari database</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Hapus Operator Gagal ! Mohon ulangi kembali</div>";
														}

														if(isset($_POST['edit'])){
															$nama	 		= $_POST['nama'];
															$email 			= $_POST['email'];
															$no_hp	 		= $_POST['no_hp'];
															$id_operator	= $_POST['id_operator'];
															$input  		= "update operator set email ='" . $email . "', nama ='" . $nama . "', no_hp ='" . $no_hp . "' where id_operator ='" . $id_operator . "'";
															$query_input 	= mysql_query($input);
															if($query_input) {
															$sukses = "<div class='alert alert-success' role='alert'><strong>Well done! </strong>Data Operator <strong>$nama</strong> berhasil dirubah</div><br>";
															} else $gagal = "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>ubah data Operator GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}

													if(isset($sukses)) { echo $sukses; }
													if(isset($gagal)) { echo $gagal; } 
										?>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered complex-headers">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Operator</th>
                                                        <th>E-mail</th>
														<th>Nomor Ponsel</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													<?php
														$no = 0;
														$query = mysql_query("select * from operator");
														while ($row = mysql_fetch_array($query)) {
														$no++;
													?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $row['nama']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['no_hp']; ?></td>
                                                        <td>
															<button type="button" class="btn btn-icon btn-outline-warning mr-1 mb-1" data-toggle="modal" data-target="#edit<?php echo $no; ?>"><i class="bx bx-pencil"></i></button>
															<button type="button" class="btn btn-icon btn-outline-danger mr-1 mb-1" data-toggle="modal" data-target="#hapus<?php echo $no; ?>"><i class="bx bx-trash"></i></button>
														</td>
                                                    </tr>
													<div class="modal fade text-left" id="edit<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
														<form action="" method="post">
														<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header bg-warning">
																	<h4 class="modal-title text-white" id="myModalLabel17">Edit Data Operator</h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<i class="bx bx-x"></i>
																	</button>
																</div>
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
																	<input type="hidden" name="id_operator" value="<?php echo $row['id_operator']; ?>">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-light-secondary" data-dismiss="modal">
																		<i class="bx bx-x d-block d-sm-none"></i>
																		<span class="d-none d-sm-block">Batal</span>
																	</button>
																	<button type="submit" name="edit" class="btn btn-warning ml-1" >
																		<i class="bx bx-check d-block d-sm-none"></i>
																		<span class="d-none d-sm-block">Update</span>
																	</button>
																</div>
															</div>
														</div>
														</form>
													</div>
													<div class="modal fade text-left" id="hapus<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
														<form action="" method="post">
														<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header bg-danger">
																	<h4 class="modal-title text-white" id="myModalLabel17">Hapus Data Operator</h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<i class="bx bx-x"></i>
																	</button>
																</div>
																<div class="modal-body">
																	<h5>Yakin akan menghapus data operator <strong><?php echo $row['nama']; ?></strong> dari sistem ?</h5>
																	<input type="hidden" name="id_operator" value="<?php echo $row['id_operator']; ?>">
																	<input type="hidden" name="nama" value="<?php echo $row['nama']; ?>">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-light-secondary" data-dismiss="modal">
																		<i class="bx bx-x d-block d-sm-none"></i>
																		<span class="d-none d-sm-block">Batal</span>
																	</button>
																	<button type="submit" name="hapus" class="btn btn-danger ml-1" >
																		<i class="bx bx-check d-block d-sm-none"></i>
																		<span class="d-none d-sm-block">Hapus</span>
																	</button>
																</div>
															</div>
														</div>
														</form>
													</div>
													<?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
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
    <script src="../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <script src="../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>