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
    <title>Sistem Informasi Administrasi Kependudukan - Dikantor Kelurahan Handil Bakti</title>
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
                                <div class="user-nav d-sm-flex d-none"><span class="user-name"><?php echo $_SESSION['nama'] ?></span><span class="user-status text-muted">Penduduk</span></div>
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
				<li class=" nav-item active"><a href="permohonan.php"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Dashboard">List Data Permohonan</span></a>
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
                            <h5 class="content-header-title float-left pr-1 mb-0">List Data Permohonan</h5>
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
										<button type="button" class="btn btn-primary glow mr-1 mb-1" data-toggle="modal" data-target="#tambah"><i class="bx bx-plus-circle"></i><span class="align-middle ml-25">TAMBAH DATA PERMOHONAN</span></button>
										<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Pilih Jenis Pengurusan Dokumen</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">	
														<div class="row">
															<div class="col-xl-1 col-sm-6 col-12">
															</div>
															<div class="col-xl-2 col-sm-6 col-12">
																<div class="card text-center bg-secondary bg-lighten-1">
																	<a href="" data-dismiss="modal" data-toggle="modal" data-target="#kk">
																	<div class="card-content text-white">
																		<div class="card-body">
																			<img src="../app-assets/images/elements/kk.png" height="150" alt="element 05" class="mb-1 w-100">
																			<h4 class="card-title white">Permohonan <br>Kartu Keluarga</h4><br>
																		</div>
																	</div>
																	</a>
																</div>
															</div>
															<div class="col-xl-2 col-sm-6 col-12">
																<div class="card text-center bg-success bg-lighten-2">
																	<a href="" data-dismiss="modal" data-toggle="modal" data-target="#lahir">
																	<div class="card-content d-flex">
																		<div class="card-body">
																			<img src="../app-assets/images/elements/lahir.png" alt="element 06" height="150" class="mb-1">
																			<h4 class="card-title white">Permohonan <br>Akta Kelahiran</h4><br>
																		</div>
																	</div>
																	</a>
																</div>
															</div>
															<div class="col-xl-2 col-sm-6 col-12">
																<div class="card text-center bg-danger bg-lighten-2">
																	<a href="" data-dismiss="modal" data-toggle="modal" data-target="#mati">
																	<div class="card-content d-flex">
																		<div class="card-body">
																			<img src="../app-assets/images/elements/mati.png" alt="element 06" height="150" class="mb-1">
																			<h4 class="card-title white">Permohonan <br>Akta Kematian</h4><br>
																		</div>
																	</div>
																	</a>
																</div>
															</div>
															<div class="col-xl-2 col-sm-6 col-12">
																<div class="card text-center bg-primary bg-lighten-2">
																	<a href="" data-dismiss="modal" data-toggle="modal" data-target="#datang">
																	<div class="card-content d-flex">
																		<div class="card-body">
																			<img src="../app-assets/images/elements/datang.png" alt="element 06" height="150" class="mb-1">
																			<h4 class="card-title white">Permohonan <br>Pindah Datang</h4><br>
																		</div>
																	</div>
																	</a>
																</div>
															</div>
															<div class="col-xl-2 col-sm-6 col-12">
																<div class="card text-center bg-lighten-2 bg-yahoo">
																	<a href="" data-dismiss="modal" data-toggle="modal" data-target="#keluar">
																	<div class="card-content d-flex">
																		<div class="card-body">
																			<img src="../app-assets/images/elements/keluar.png" alt="element 06" height="150" class="mb-1">
																			<h4 class="card-title white">Permohonan <br>Pindah Keluar</h4><br>
																		</div>
																	</div>
																	</a>
																</div>
															</div>
															<div class="col-xl-1 col-sm-6 col-12">
															</div>
														</div>
													</div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                    </div>
                                            	</div>
                                            </div>
											</form>
                                    	</div>
										<div class="modal fade text-left" id="kk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post" enctype="multipart/form-data">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Permohonan Kartu Keluarga</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">
                                                    	<fieldset class="form-group">
															<label for="basicInput">Kartu Keluarga Asli (Untuk Pendatang Lampirkan Surat Pindah Datang Asli)</label>
															<input type="file" class="form-control" id="basicInput" name="kk_pindah" required>
														</fieldset>
                                                    	<fieldset class="form-group">
															<label for="basicInput">KTP Seluruh Keluarga Yang Sudah Wajib KTP (unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="ktp" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Akta Kelahiran Seluruh Keluarga (unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="akta_lahir" required accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Buku / Akta Nikah Full 1 Buku (unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="akta_nikah"  accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Akta Cerai / Kematian (Jika Status Janda / Duda)</label>
															<input type="file" class="form-control" id="basicInput" name="cerai_mati">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Ijazah Terakhir Seluruh Keluarga (unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="ijazah" accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Pengantar RT dan RW (unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="rt_rw" accept="application/pdf">
														</fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                        <button type="submit" name="kk" class="btn btn-primary ml-1" >
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Simpan</span>
                                                    	</button>
                                                    </div>
                                            	</div>
                                            </div>
											</form>
                                    	</div>
										<div class="modal fade text-left" id="lahir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post" enctype="multipart/form-data">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Permohonan Akta Kelahiran</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">	
														<div class="row">
															<div class="col-xl-1 col-sm-6 col-12">
															</div>
															<div class="col-xl-5 col-sm-6 col-12">
																<div class="card text-center bg-success bg-lighten-1">
																	<a href="" data-dismiss="modal" data-toggle="modal" data-target="#nik">
																	<div class="card-content text-white">
																		<div class="card-body">
																			<h3 class="card-title"><strong>SUDAH MEMILIKI NIK ?</strong></h3><br>
																		</div>
																	</div>
																	</a>
																</div>
															</div>
															<div class="col-xl-5 col-sm-6 col-12">
																<div class="card text-center bg-danger bg-lighten-2">
																	<a href="" data-dismiss="modal" data-toggle="modal" data-target="#nonik">
																	<div class="card-content d-flex">
																		<div class="card-body">
																			<h3 class="card-title"><strong>BELUM MEMILIKI NIK ?</strong></h3><br>
																		</div>
																	</div>
																	</a>
																</div>
															</div>
															<div class="col-xl-1 col-sm-6 col-12">
															</div>
														</div>
													</div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                    </div>
                                            	</div>
                                            </div>
											</form>
                                    	</div>
										<div class="modal fade text-left" id="nik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post" enctype="multipart/form-data">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Permohonan Akta Kelahiran Memiliki NIK</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">
                                                    	<fieldset class="form-group">
															<label for="basicInput">Kartu Keluarga Asli</label>
															<input type="file" class="form-control" id="basicInput" name="kk" required>
														</fieldset>
                                                    	<fieldset class="form-group">
															<label for="basicInput">KTP Pemohon (Jika Sudah Berusia Diatas 17 tahun)</label>
															<input type="file" class="form-control" id="basicInput" name="ktp">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">KTP Orang Tua Pemohon</label>
															<input type="file" class="form-control" id="basicInput" name="ktp_ortu" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">KTP Saksi (2 Orang Berumur Lebih Tua 1 Tahun Dari Pemohon Dalam PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="ktp_saksi"  accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Buku / Akta Nikah (unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="akta_nikah" accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Akta Kelahiran (Jika Dalam KK Terdapat Keluarga Berumur Kurang Dari 18 Tahun)</label>
															<input type="file" class="form-control" id="basicInput" name="akta_lahir">
														</fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                        <button type="submit" name="nik" class="btn btn-primary ml-1" >
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Simpan</span>
                                                    	</button>
                                                    </div>
                                            	</div>
                                            </div>
											</form>
                                    	</div>
										<div class="modal fade text-left" id="nonik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post" enctype="multipart/form-data">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Permohonan Akta Kelahiran Tidak Memiliki NIK</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">
                                                    	<fieldset class="form-group">
															<label for="basicInput">Kartu Keluarga Asli</label>
															<input type="file" class="form-control" id="basicInput" name="kk" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">KTP Saksi (Suami Istri Dalam PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="suami_istri"  accept="application/pdf" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">KTP Saksi (2 Orang Berumur Lebih Tua 1 Tahun Dari Pemohon Dalam PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="ktp_saksi"  accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Buku / Akta Nikah (unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="akta_nikah" accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">pengantar Kelahiran Asli dari Rumah Sakit/Bidan</label>
															<input type="file" class="form-control" id="basicInput" name="rs">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Akta Kelahiran (Jika Dalam KK Terdapat Keluarga Berumur Kurang Dari 18 Tahun)</label>
															<input type="file" class="form-control" id="basicInput" name="akta_lahir">
														</fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                        <button type="submit" name="nonik" class="btn btn-primary ml-1" >
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Simpan</span>
                                                    	</button>
                                                    </div>
                                            	</div>
                                            </div>
											</form>
                                    	</div>
										<div class="modal fade text-left" id="mati" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post" enctype="multipart/form-data">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Permohonan Akta Kematian</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">
                                                    	<fieldset class="form-group">
															<label for="basicInput">KTP Yang Meninggal</label>
															<input type="file" class="form-control" id="basicInput" name="ktp" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Kartu Keluarga</label>
															<input type="file" class="form-control" id="basicInput" name="kk" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">KTP Pelapor</label>
															<input type="file" class="form-control" id="basicInput" name="pelapor" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">KTP Saksi (2 Orang unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="ktp_saksi"  accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Buku / Akta Nikah (unggah dalam 1 berkas PDF)</label>
															<input type="file" class="form-control" id="basicInput" name="akta_nikah" accept="application/pdf">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Pengantar kematian Asli dari Rumah Sakit (Jika Meninggal di RS)</label>
															<input type="file" class="form-control" id="basicInput" name="rs">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Akta Kelahiran</label>
															<input type="file" class="form-control" id="basicInput" name="akta_lahir">
														</fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                        <button type="submit" name="mati" class="btn btn-primary ml-1" >
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Simpan</span>
                                                    	</button>
                                                    </div>
                                            	</div>
                                            </div>
											</form>
                                    	</div>
										<div class="modal fade text-left" id="datang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post" enctype="multipart/form-data">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Permohonan Surat Keterangan Datang</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">
                                                    	<fieldset class="form-group">
															<label for="basicInput">KTP</label>
															<input type="file" class="form-control" id="basicInput" name="ktp" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Kartu Keluarga</label>
															<input type="file" class="form-control" id="basicInput" name="kk" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Surat Pindah Dari Tempat Asal</label>
															<input type="file" class="form-control" id="basicInput" name="pindah" required>
														</fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                        <button type="submit" name="datang" class="btn btn-primary ml-1" >
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Simpan</span>
                                                    	</button>
                                                    </div>
                                            	</div>
                                            </div>
											</form>
                                    	</div>
										<div class="modal fade text-left" id="keluar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post" enctype="multipart/form-data">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Permohonan Surat Keterangan Keluar</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">
                                                    	<fieldset class="form-group">
															<label for="basicInput">KTP</label>
															<input type="file" class="form-control" id="basicInput" name="ktp" required>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Kartu Keluarga</label>
															<input type="file" class="form-control" id="basicInput" name="kk" required>
														</fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        	<i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                        <button type="submit" name="keluar" class="btn btn-primary ml-1" >
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

														if(isset($_POST['kk'])){
															$input  		= "insert into permohonan (tanggal, jenis, status, keterangan, id_penduduk) values (NOW(),'KARTU KELUARGA','MENUNGGU VERIFIKASI','','". $_SESSION['id_penduduk'] ."')";
															$query_input 	= mysql_query($input);
															$idperm			= mysql_insert_id();
															
															if($_FILES['kk_pindah']['error'] == 0){
																$kk_pindah		= 'kk_pindah'.$idperm.'-'.$_FILES['kk_pindah']['name'];
																$x 				= explode('.', $kk_pindah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['kk_pindah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$kk_pindah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('Kartu Keluarga / Surat Pindah','$kk_pindah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp']['error'] == 0){
																$ktp			= 'ktp'.$idperm.'-'.$_FILES['ktp']['name'];
																$x 				= explode('.', $ktp);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP','$ktp','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_lahir']['error'] == 0){
																$akta_lahir		= 'akta_lahir'.$idperm.'-'.$_FILES['akta_lahir']['name'];
																$x 				= explode('.', $akta_lahir);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_lahir']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_lahir);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA KELAHIRAN','$akta_lahir','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_nikah']['error'] == 0){
																$akta_nikah		= 'akta_nikah'.$idperm.'-'.$_FILES['akta_nikah']['name'];
																$x 				= explode('.', $akta_nikah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_nikah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_nikah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA NIKAH','$akta_nikah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['cerai_mati']['error'] == 0){
																$cerai_mati		= 'cerai_mati'.$idperm.'-'.$_FILES['cerai_mati']['name'];
																$x 				= explode('.', $cerai_mati);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['cerai_mati']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$cerai_mati);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA CERAI / KEMATIAN','$cerai_mati','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ijazah']['error'] == 0){
																$ijazah			= 'ijazah'.$idperm.'-'.$_FILES['ijazah']['name'];
																$x 				= explode('.', $ijazah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ijazah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ijazah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('IJAZAH','$ijazah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['rt_rw']['error'] == 0){
																$rt_rw			= 'rt_rw'.$idperm.'-'.$_FILES['rt_rw']['name'];
																$x 				= explode('.', $rt_rw);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['rt_rw']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$rt_rw);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('PENGANTAR RT/RW','$rt_rw','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
																														
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Permohonan <strong>Kartu Keluarga</strong> berhasil diajukan ke kelurahan. Mohon menunggu proses lebih lanjut.</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Permohonan Kartu Keluarga GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}
									
														if(isset($_POST['nik'])){
															$input  		= "insert into permohonan (tanggal, jenis, status, id_penduduk) values (NOW(),'AKTA KELAHIRAN','MENUNGGU VERIFIKASI','". $_SESSION['id_penduduk'] ."')";
															$query_input 	= mysql_query($input);
															$idperm			= mysql_insert_id();
															
															if($_FILES['kk']['error'] == 0){
																$kk				= 'kk'.$idperm.'-'.$_FILES['kk']['name'];
																$x 				= explode('.', $kk);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['kk']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$kk);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('Kartu Keluarga','$kk','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp']['error'] == 0){
																$ktp			= 'ktp'.$idperm.'-'.$_FILES['ktp']['name'];
																$x 				= explode('.', $ktp);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP','$ktp','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp_ortu']['error'] == 0){
																$ktp_ortu		= 'ktp_ortu'.$idperm.'-'.$_FILES['ktp_ortu']['name'];
																$x 				= explode('.', $ktp_ortu);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp_ortu']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp_ortu);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP ORANG TUA','$ktp_ortu','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_nikah']['error'] == 0){
																$akta_nikah		= 'akta_nikah'.$idperm.'-'.$_FILES['akta_nikah']['name'];
																$x 				= explode('.', $akta_nikah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_nikah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_nikah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA NIKAH','$akta_nikah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp_saksi']['error'] == 0){
																$ktp_saksi		= 'ktp_saksi'.$idperm.'-'.$_FILES['ktp_saksi']['name'];
																$x 				= explode('.', $ktp_saksi);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp_saksi']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp_saksi);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP SAKSI','$ktp_saksi','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_lahir']['error'] == 0){
																$akta_lahir		= 'akta_lahir'.$idperm.'-'.$_FILES['akta_lahir']['name'];
																$x 				= explode('.', $akta_lahir);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_lahir']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_lahir);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA KELAHIRAN','$akta_lahir','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
																														
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Permohonan <strong>Akta Kelahiran</strong> berhasil diajukan ke kelurahan. Mohon menunggu proses lebih lanjut.</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Permohonan Akta Kelahiran GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}
									
														if(isset($_POST['nonik'])){
															$input  		= "insert into permohonan (tanggal, jenis, status, id_penduduk) values (NOW(),'AKTA KELAHIRAN','MENUNGGU VERIFIKASI','". $_SESSION['id_penduduk'] ."')";
															$query_input 	= mysql_query($input);
															$idperm			= mysql_insert_id();
															
															if($_FILES['kk']['error'] == 0){
																$kk				= 'kk'.$idperm.'-'.$_FILES['kk']['name'];
																$x 				= explode('.', $kk);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['kk']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$kk);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('Kartu Keluarga','$kk','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['suami_istri']['error'] == 0){
																$suami_istri	= 'suami_istri'.$idperm.'-'.$_FILES['suami_istri']['name'];
																$x 				= explode('.', $suami_istri);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['suami_istri']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$suami_istri);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP SUAMI ISTRI','$suami_istri','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_nikah']['error'] == 0){
																$akta_nikah		= 'akta_nikah'.$idperm.'-'.$_FILES['akta_nikah']['name'];
																$x 				= explode('.', $akta_nikah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_nikah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_nikah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA NIKAH','$akta_nikah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp_saksi']['error'] == 0){
																$ktp_saksi		= 'ktp_saksi'.$idperm.'-'.$_FILES['ktp_saksi']['name'];
																$x 				= explode('.', $ktp_saksi);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp_saksi']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp_saksi);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP SAKSI','$ktp_saksi','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_lahir']['error'] == 0){
																$akta_lahir		= 'akta_lahir'.$idperm.'-'.$_FILES['akta_lahir']['name'];
																$x 				= explode('.', $akta_lahir);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_lahir']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_lahir);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA KELAHIRAN','$akta_lahir','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['rs']['error'] == 0){
																$rs				= 'rs'.$idperm.'-'.$_FILES['rs']['name'];
																$x 				= explode('.', $rs);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['rs']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$rs);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('PENGANTAR KELAHIRAN RS/BIDAN','$rs','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
																														
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Permohonan <strong>Akta Kelahiran</strong> berhasil diajukan ke kelurahan. Mohon menunggu proses lebih lanjut.</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Permohonan Akta Kelahiran GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}
									
														if(isset($_POST['mati'])){
															$input  		= "insert into permohonan (tanggal, jenis, status, id_penduduk) values (NOW(),'AKTA KEMATIAN','MENUNGGU VERIFIKASI','". $_SESSION['id_penduduk'] ."')";
															$query_input 	= mysql_query($input);
															$idperm			= mysql_insert_id();
															
															if($_FILES['kk']['error'] == 0){
																$kk				= 'kk'.$idperm.'-'.$_FILES['kk']['name'];
																$x 				= explode('.', $kk);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['kk']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$kk);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('Kartu Keluarga','$kk','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp']['error'] == 0){
																$ktp			= 'ktp'.$idperm.'-'.$_FILES['ktp']['name'];
																$x 				= explode('.', $ktp);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP YANG MENINGGAL','$ktp','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['pelapor']['error'] == 0){
																$pelapor		= 'pelapor'.$idperm.'-'.$_FILES['pelapor']['name'];
																$x 				= explode('.', $pelapor);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['pelapor']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$pelapor);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP PELAPOR','$pelapor','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp_saksi']['error'] == 0){
																$ktp_saksi		= 'ktp_saksi'.$idperm.'-'.$_FILES['ktp_saksi']['name'];
																$x 				= explode('.', $ktp_saksi);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp_saksi']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp_saksi);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP SAKSI','$ktp_saksi','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_lahir']['error'] == 0){
																$akta_lahir		= 'akta_lahir'.$idperm.'-'.$_FILES['akta_lahir']['name'];
																$x 				= explode('.', $akta_lahir);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_lahir']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_lahir);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA KELAHIRAN','$akta_lahir','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['rs']['error'] == 0){
																$rs				= 'rs'.$idperm.'-'.$_FILES['rs']['name'];
																$x 				= explode('.', $rs);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['rs']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$rs);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('PENGANTAR KEMATIAN RS','$rs','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
																														
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Permohonan <strong>Akta Kematian</strong> berhasil diajukan ke kelurahan. Mohon menunggu proses lebih lanjut.</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Permohonan Akta Kematian GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}
									
														if(isset($_POST['datang'])){
															$input  		= "insert into permohonan (tanggal, jenis, status, id_penduduk) values (NOW(),'SURAT DATANG','MENUNGGU VERIFIKASI','". $_SESSION['id_penduduk'] ."')";
															$query_input 	= mysql_query($input);
															$idperm			= mysql_insert_id();
															
															if($_FILES['kk']['error'] == 0){
																$kk				= 'kk'.$idperm.'-'.$_FILES['kk']['name'];
																$x 				= explode('.', $kk);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['kk']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$kk);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('Kartu Keluarga','$kk','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp']['error'] == 0){
																$ktp			= 'ktp'.$idperm.'-'.$_FILES['ktp']['name'];
																$x 				= explode('.', $ktp);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP','$ktp','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['pindah']['error'] == 0){
																$pindah		= 'pindah'.$idperm.'-'.$_FILES['pindah']['name'];
																$x 				= explode('.', $pindah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['pindah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$pindah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('SURAT KETERANGAN PINDAH','$pindah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
																														
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Permohonan <strong>Surat Keterangan Datang</strong> berhasil diajukan ke kelurahan. Mohon menunggu proses lebih lanjut.</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Permohonan Surat Keterangan Datang GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}
									
														if(isset($_POST['keluar'])){
															$input  		= "insert into permohonan (tanggal, jenis, status, id_penduduk) values (NOW(),'SURAT KELUAR','MENUNGGU VERIFIKASI','". $_SESSION['id_penduduk'] ."')";
															$query_input 	= mysql_query($input);
															$idperm			= mysql_insert_id();
															
															if($_FILES['kk']['error'] == 0){
																$kk				= 'kk'.$idperm.'-'.$_FILES['kk']['name'];
																$x 				= explode('.', $kk);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['kk']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$kk);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('Kartu Keluarga','$kk','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp']['error'] == 0){
																$ktp			= 'ktp'.$idperm.'-'.$_FILES['ktp']['name'];
																$x 				= explode('.', $ktp);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP','$ktp','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
																														
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Permohonan <strong>Surat Keterangan Keluar</strong> berhasil diajukan ke kelurahan. Mohon menunggu proses lebih lanjut.</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Permohonan Surat Keterangan Keluar GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}

														if(isset($_POST['hapus'])){
															$nama	 		= $_POST['nama'];
															$id_penduduk	= $_POST['id_penduduk'];
															$input  		= "delete from penduduk where id_penduduk ='$id_penduduk'";
															$query_input 	= mysql_query($input);
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Data Penduduk <strong>$nama</strong> berhasil dihapus dari database</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Hapus Penduduk Gagal ! Mohon ulangi kembali</div>";
														}

														if(isset($_POST['edit'])){
															$nama	 		= $_POST['nama'];
															$nik 			= $_POST['nik'];
															$kota_lahir		= $_POST['kota_lahir'];
															$tanggal_lahir	= $_POST['tanggal_lahir'];
															$agama			= $_POST['agama'];
															$status_nikah	= $_POST['status_nikah'];
															$shdk			= $_POST['shdk'];
															$pekerjaan		= $_POST['pekerjaan'];
															$id_penduduk	= $_POST['id_penduduk'];
															$input  		= "update penduduk set nik ='" . $nik . "', nama ='" . $nama . "', kota_lahir ='" . $kota_lahir . "', tanggal_lahir ='" . $tanggal_lahir . "', agama ='" . $agama . "', status_nikah ='" . $status_nikah . "', shdk ='" . $shdk . "', pekerjaan ='" . $pekerjaan . "' where id_penduduk ='" . $id_penduduk . "'";
															$query_input 	= mysql_query($input);
															if($query_input) {
															$sukses = "<div class='alert alert-success' role='alert'><strong>Well done! </strong>Data Penduduk <strong>$nama</strong> berhasil dirubah</div><br>";
															} else $gagal = "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>ubah data Penduduk GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}

													if(isset($sukses)) { echo $sukses; }
													if(isset($gagal)) { echo $gagal; } 
										?>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered complex-headers">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nomor Permohonan</th>
                                                        <th>Tanggal Permohonan</th>
                                                        <th>Jenis Permohonan</th>
														<th>Status Permohonan</th>
														<th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													<?php
														$no = 0;
														$query = mysql_query("select * from permohonan where id_penduduk='". $_SESSION['id_penduduk'] ."'");
														while ($row = mysql_fetch_array($query)) {
														$no++;
															
														if($row['jenis']=='KARTU KELUARGA'){
															$prx = 'KK';
														} else if($row['jenis']=='AKTA KELAHIRAN'){
															$prx = 'SKL';
														} else if($row['jenis']=='AKTA KEMATIAN'){
															$prx = 'SKM';
														} else if($row['jenis']=='SURAT DATANG'){
															$prx = 'SKD';
														} else if($row['jenis']=='SURAT KELUAR'){
															$prx = 'SKP';
														} 
															
														if($row['status']=='MENUNGGU VERIFIKASI' or $row['status']=='MENUNGGU VALIDASI LURAH'){
															$suf = 'badge-primary';
														} else if($row['status']=='DITOLAK'){
															$suf = 'badge-danger';
														} else if($row['status']=='DITERBITKAN' or $row['status']=='SELESAI'){
															$suf = 'badge-success';
														}
													?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
														<td><?php echo $prx; ?>-00<?php echo $row['id_permohonan']; ?></td>
                                                        <td><?php echo tanggal_indo($row['tanggal']); ?></td>
                                                        <td><?php echo $row['jenis']; ?></td>
														<td><div class="badge <?php echo $suf; ?> mr-1 mb-1"><?php echo $row['status']; ?></div></td>
														<td><?php echo $row['keterangan']; ?></td>
                                                    </tr>
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