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
                <li class=" nav-item"><a href="operator.php"><i class="menu-livicon" data-icon="pen"></i><span class="menu-title" data-i18n="Dashboard">List Data Operator</span></a>
                </li>
				<li class=" nav-item active"><a href="penduduk.php"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="Dashboard">List Data Penduduk</span></a>
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
                            <h5 class="content-header-title float-left pr-1 mb-0">List Data Penduduk</h5>
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
										<button type="button" class="btn btn-primary glow mr-1 mb-1" data-toggle="modal" data-target="#tambah"><i class="bx bx-plus-circle"></i><span class="align-middle ml-25">TAMBAH DATA PENDUDUK</span></button>
										<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
											<form action="" method="post">
                                        	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            	<div class="modal-content">
                                                	<div class="modal-header bg-primary">
                                                    	<h4 class="modal-title text-white" id="myModalLabel17">Tambah Data Penduduk</h4>
                                                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        	<i class="bx bx-x"></i>
                                                    	</button>
                                                	</div>
                                                    <div class="modal-body">
														<fieldset class="form-group">
															<label for="basicInput">Nomor Induk Kependudukan</label>
															<input type="text" class="form-control" id="basicInput" name="nik" placeholder="isi nomor induk kependudukan penduduk">
														</fieldset>
                                                    	<fieldset class="form-group">
															<label for="basicInput">Nama Penduduk</label>
															<input type="text" class="form-control" id="basicInput" name="nama" placeholder="isi nama lengkap penduduk">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Kota Kelahiran</label>
															<input type="text" class="form-control" id="basicInput" name="kota_lahir" placeholder="isi kota kelahiran penduduk">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Tanggal Lahir</label>
															<input type="date" class="form-control" id="basicInput" name="tanggal_lahir" placeholder="isi tanggal lahir penduduk">
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Agama</label>
															<select name="agama" id="" class="form-control">
																<option value="-">---  PILIH AGAMA  ---</option>
																<option value="ISLAM">ISLAM</option>
																<option value="KATOLIK">KATOLIK</option>
																<option value="PROTESTAN">PROTESTAN</option>
																<option value="HINDU">HINDU</option>
																<option value="BUDHA">BUDHA</option>
																<option value="KONGHUCHU">KONGHUCHU</option>
															</select>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Status Pernikahan</label>
															<select name="status_nikah" id="" class="form-control">
																<option value="-">---  PILIH STATUS PERNIKAHAN  ---</option>
																<option value="KAWIN">KAWIN</option>
																<option value="BELUM KAWIN">BELUM KAWIN</option>
																<option value="CERAI HIDUP">CERAI HIDUP</option>
																<option value="CERAI MATI">CERAI MATI</option>
															</select>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Status Hubungan Dalam Keluarga</label>
															<select name="shdk" id="" class="form-control">
																<option value="0">---  PILIH STATUS DALAM KELUARGA  ---</option>
																<option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
																<option value="ISTRI">ISTRI</option>
																<option value="ANAK">ANAK</option>
																<option value="MERTUA">MERTUA</option>
																<option value="ORANG TUA">ORANG TUA</option>
																<option value="FAMILY LAIN">FAMILY LAIN</option>
															</select>
														</fieldset>
														<fieldset class="form-group">
															<label for="basicInput">Pekerjaan</label>
															<input type="text" class="form-control" id="basicInput" name="pekerjaan" placeholder="isi pekerjaan penduduk">
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
															$nik 			= $_POST['nik'];
															$kota_lahir		= $_POST['kota_lahir'];
															$tanggal_lahir	= $_POST['tanggal_lahir'];
															$agama			= $_POST['agama'];
															$status_nikah	= $_POST['status_nikah'];
															$shdk			= $_POST['shdk'];
															$pekerjaan		= $_POST['pekerjaan'];
															$input  		= "insert into penduduk (nama, nik, kota_lahir, tanggal_lahir, agama, status_nikah, shdk, pekerjaan) values ('$nama','$nik','$kota_lahir','$tanggal_lahir','$agama','$status_nikah','$shdk','$pekerjaan')";
															$query_input 	= mysql_query($input);
															if($query_input) {
															$sukses 		= "<div class='alert alert-info' role='alert'><strong>Well done! </strong>Data Penduduk <strong>$nama</strong> berhasil tersimpan di database.</div><br>";
															} else $gagal 	= "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Tambah Data Penduduk GAGAL ! Mohon periksa kembali</div>".mysql_error();
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
                                                        <th>Nomor Induk Kependudukan</th>
                                                        <th>Nama Penduduk</th>
                                                        <th>Tempat Tanggal Lahir</th>
														<th>Agama</th>
														<th>Status Pernikahan</th>
														<th>Status Dalam Keluarga</th>
														<th>Pekerjaan</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													<?php
														$no = 0;
														$query = mysql_query("select * from penduduk");
														while ($row = mysql_fetch_array($query)) {
														$no++;
													?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
														<td><?php echo $row['nik']; ?></td>
                                                        <td><?php echo $row['nama']; ?></td>
                                                        <td><?php echo $row['kota_lahir']; ?>, <?php echo tanggal_indo($row['tanggal_lahir']); ?></td>
                                                        <td><?php echo $row['agama']; ?></td>
														<td><?php echo $row['status_nikah']; ?></td>
														<td><?php echo $row['shdk']; ?></td>
														<td><?php echo $row['pekerjaan']; ?></td>
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
																	<h4 class="modal-title text-white" id="myModalLabel17">Edit Data Penduduk</h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<i class="bx bx-x"></i>
																	</button>
																</div>
																<div class="modal-body">
																	<fieldset class="form-group">
																		<label for="basicInput">Nomor Induk Kependudukan</label>
																		<input type="text" class="form-control" id="basicInput" name="nik" placeholder="isi nomor induk kependudukan penduduk" value="<?php echo $row['nik']; ?>">
																	</fieldset>
																	<fieldset class="form-group">
																		<label for="basicInput">Nama Penduduk</label>
																		<input type="text" class="form-control" id="basicInput" name="nama" placeholder="isi nama lengkap penduduk" value="<?php echo $row['nama']; ?>">
																	</fieldset>
																	<fieldset class="form-group">
																		<label for="basicInput">Kota Kelahiran</label>
																		<input type="text" class="form-control" id="basicInput" name="kota_lahir" placeholder="isi kota kelahiran penduduk" value="<?php echo $row['kota_lahir']; ?>">
																	</fieldset>
																	<fieldset class="form-group">
																		<label for="basicInput">Tanggal Lahir</label>
																		<input type="date" class="form-control" id="basicInput" name="tanggal_lahir" placeholder="isi tanggal lahir penduduk" value="<?php echo $row['tanggal_lahir']; ?>">
																	</fieldset>
																	<fieldset class="form-group">
																		<label for="basicInput">Agama</label>
																		<select name="agama" id="" class="form-control">
																			<option value="-">---  PILIH AGAMA  ---</option>
																			<option value="ISLAM" <?php if($row['agama']=="ISLAM") echo 'selected="selected"'; ?>>ISLAM</option>
																			<option value="KATOLIK" <?php if($row['agama']=="KATOLIK") echo 'selected="selected"'; ?>>KATOLIK</option>
																			<option value="PROTESTAN" <?php if($row['agama']=="PROTESTAN") echo 'selected="selected"'; ?>>PROTESTAN</option>
																			<option value="HINDU" <?php if($row['agama']=="HINDU") echo 'selected="selected"'; ?>>HINDU</option>
																			<option value="BUDHA" <?php if($row['agama']=="BUDHA") echo 'selected="selected"'; ?>>BUDHA</option>
																			<option value="KONGHUCHU" <?php if($row['agama']=="KONGHUCHU") echo 'selected="selected"'; ?>>KONGHUCHU</option>
																		</select>
																	</fieldset>
																	<fieldset class="form-group">
																		<label for="basicInput">Status Pernikahan</label>
																		<select name="status_nikah" id="" class="form-control">
																			<option value="-">---  PILIH STATUS PERNIKAHAN  ---</option>
																			<option value="KAWIN" <?php if($row['status_nikah']=="KAWIN") echo 'selected="selected"'; ?>>KAWIN</option>
																			<option value="BELUM KAWIN" <?php if($row['status_nikah']=="BELUM KAWIN") echo 'selected="selected"'; ?>>BELUM KAWIN</option>
																			<option value="CERAI HIDUP" <?php if($row['status_nikah']=="CERAI HIDUP") echo 'selected="selected"'; ?>>CERAI HIDUP</option>
																			<option value="CERAI MATI" <?php if($row['status_nikah']=="CERAI MATI") echo 'selected="selected"'; ?>>CERAI MATI</option>
																		</select>
																	</fieldset>
																	<fieldset class="form-group">
																		<label for="basicInput">Status Hubungan Dalam Keluarga</label>
																		<select name="shdk" id="" class="form-control">
																			<option value="0">---  PILIH STATUS DALAM KELUARGA  ---</option>
																			<option value="KEPALA KELUARGA" <?php if($row['shdk']=="KEPALA KELUARGA") echo 'selected="selected"'; ?>>KEPALA KELUARGA</option>
																			<option value="ISTRI" <?php if($row['shdk']=="ISTRI") echo 'selected="selected"'; ?>>ISTRI</option>
																			<option value="ANAK" <?php if($row['shdk']=="ANAK") echo 'selected="selected"'; ?>>ANAK</option>
																			<option value="MERTUA" <?php if($row['shdk']=="MERTUA") echo 'selected="selected"'; ?>>MERTUA</option>
																			<option value="ORANG TUA" <?php if($row['shdk']=="ORANG TUA") echo 'selected="selected"'; ?>>ORANG TUA</option>
																			<option value="FAMILY LAIN" <?php if($row['shdk']=="FAMILY LAIN") echo 'selected="selected"'; ?>>FAMILY LAIN</option>
																		</select>
																	</fieldset>
																	<fieldset class="form-group">
																		<label for="basicInput">Pekerjaan</label>
																		<input type="text" class="form-control" id="basicInput" name="pekerjaan" placeholder="isi pekerjaan penduduk" value="<?php echo $row['pekerjaan']; ?>">
																	</fieldset>
																	<input type="hidden" name="id_penduduk" value="<?php echo $row['id_penduduk']; ?>">
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
																	<h4 class="modal-title text-white" id="myModalLabel17">Hapus Data Penduduk</h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<i class="bx bx-x"></i>
																	</button>
																</div>
																<div class="modal-body">
																	<h5>Yakin akan menghapus data penduduk <strong><?php echo $row['nama']; ?></strong> dari sistem ?</h5>
																	<input type="hidden" name="id_penduduk" value="<?php echo $row['id_penduduk']; ?>">
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