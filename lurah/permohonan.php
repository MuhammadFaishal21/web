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
                                <div class="user-nav d-sm-flex d-none"><span class="user-name"><?php echo $_SESSION['nama'] ?></span><span class="user-status text-muted">Lurah</span></div>
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
															$input  		= "insert into permohonan (tanggal, jenis, status, id_penduduk) values (NOW(),'KARTU KELUARGA','MENUNGGU VERIFIKASI','". $_SESSION['id_penduduk'] ."')";
															$query_input 	= mysql_query($input);
															$idperm			= mysql_insert_id();
															
															if($_FILES['kk_pindah']['error'] == 0){
																$kk_pindah		= 'kk'.$idperm.'-'.$_FILES['kk_pindah']['name'];
																$x 				= explode('.', $kk_pindah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['kk_pindah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$kk_pindah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('Kartu Keluarga / Surat Pindah','$kk_pindah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ktp']['error'] == 0){
																$ktp			= 'kk'.$idperm.'-'.$_FILES['ktp']['name'];
																$x 				= explode('.', $ktp);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ktp']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ktp);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('KTP','$ktp','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_lahir']['error'] == 0){
																$akta_lahir		= 'kk'.$idperm.'-'.$_FILES['akta_lahir']['name'];
																$x 				= explode('.', $akta_lahir);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_lahir']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_lahir);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA KELAHIRAN','$akta_lahir','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['akta_nikah']['error'] == 0){
																$akta_nikah		= 'kk'.$idperm.'-'.$_FILES['akta_nikah']['name'];
																$x 				= explode('.', $akta_nikah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['akta_nikah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$akta_nikah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA NIKAH','$akta_nikah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['cerai_mati']['error'] == 0){
																$cerai_mati		= 'kk'.$idperm.'-'.$_FILES['cerai_mati']['name'];
																$x 				= explode('.', $cerai_mati);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['cerai_mati']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$cerai_mati);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('AKTA CERAI / KEMATIAN','$cerai_mati','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['ijazah']['error'] == 0){
																$ijazah			= 'kk'.$idperm.'-'.$_FILES['ijazah']['name'];
																$x 				= explode('.', $ijazah);
																$ekstensi 		= strtolower(end($x));
																$file_tmp 		= $_FILES['ijazah']['tmp_name'];			
																move_uploaded_file($file_tmp, '../assets/berkas/'.$ijazah);
																$query1	= "insert into berkas (jenis_berkas, foto, id_permohonan) values ('IJAZAH','$ijazah','$idperm')";
																$query_input1 	= mysql_query($query1);
															}
															
															if($_FILES['rt_rw']['error'] == 0){
																$rt_rw			= 'kk'.$idperm.'-'.$_FILES['rt_rw']['name'];
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

														if(isset($_POST['terima'])){
															$nomor	 		= $_POST['nomor'];
															$id_permohonan	= $_POST['id_permohonan'];
															$input  		= "update permohonan set status ='PROSES CETAK DOKUMEN' where id_permohonan ='" . $id_permohonan . "'";
															$query_input 	= mysql_query($input);
															if($query_input) {
															$sukses = "<div class='alert alert-success' role='alert'><strong>Well done! </strong>Data Permohonan <strong>$nomor</strong> berhasil divalidasi</div><br>";
															} else $gagal = "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Proses Data Permohonan GAGAL ! Mohon periksa kembali</div>".mysql_error();
														}
									
														if(isset($_POST['tolak'])){
															$nomor	 		= $_POST['nomor'];
															$keterangan		= $_POST['keterangan'];
															$id_permohonan	= $_POST['id_permohonan'];
															$input  		= "update permohonan set status ='DITOLAK', keterangan='$keterangan' where id_permohonan ='" . $id_permohonan . "'";
															$query_input 	= mysql_query($input);
															if($query_input) {
															$sukses = "<div class='alert alert-success' role='alert'><strong>Well done! </strong>Data Permohonan <strong>$nomor</strong> telak ditolak</div><br>";
															} else $gagal = "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Proses Data Permohonan GAGAL ! Mohon periksa kembali</div>".mysql_error();
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
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													<?php
														$no = 0;
														$query = mysql_query("select * from permohonan where status='MENUNGGU VALIDASI LURAH' or status='SELESAI'");
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
														<td>
															<button type="button" class="btn btn-icon btn-outline-info mr-1 mb-1" data-toggle="modal" data-target="#lihat<?php echo $no; ?>"><i class="bx bx-file"></i></button>
															<?php 
																if($row['status']=='MENUNGGU VALIDASI LURAH'){
															?>
															<button type="button" class="btn btn-icon btn-outline-success mr-1 mb-1" data-toggle="modal" data-target="#terima<?php echo $no; ?>"><i class="bx bx-check"></i></button>
															<button type="button" class="btn btn-icon btn-outline-danger mr-1 mb-1" data-toggle="modal" data-target="#tolak<?php echo $no; ?>"><i class="bx bx-x"></i></button>
															<?php } ?>
														</td>
                                                    </tr>
													<div class="modal fade text-left" id="lihat<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
														<form action="" method="post">
														<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
															<div class="modal-content">
																<div class="modal-header bg-primary">
																	<h4 class="modal-title text-white" id="myModalLabel17">File Manager Permohonan <?php echo $prx; ?>-00<?php echo $row['id_permohonan']; ?></h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<i class="bx bx-x"></i>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="row">
																		<?php
																			$query1 = mysql_query("select * from berkas where id_permohonan ='". $row['id_permohonan'] ."'");
																			while ($row1 = mysql_fetch_array($query1)) {
																		?>
																		<div class="col-xl-2 col-md-12 col-sm-12">
																			<div class="card text-center">
																				<div class="card-content">
																					<div class="card-body">
																						<a href="../assets/berkas/<?php echo $row1['foto']; ?>" target="_blank">
																						<div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-1">
																							<i class="bx bx-file font-medium-5"></i>
																						</div>
																						</a>
																						<p class="text-muted mb-0 line-ellipsis"><?php echo $row1['jenis_berkas']; ?></p>
																					</div>
																				</div>
																			</div>
																		</div>
																		<?php } ?>
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
													<div class="modal fade text-left" id="terima<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
														<form action="" method="post">
														<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header bg-success">
																	<h4 class="modal-title text-white" id="myModalLabel17">Terima Permohonan</h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<i class="bx bx-x"></i>
																	</button>
																</div>
																<div class="modal-body">
																	<h5>Yakin akan memvalidasi proses permohonan <strong><?php echo $prx; ?>-00<?php echo $row['id_permohonan']; ?></strong> ? <br></h5>
																	<input type="hidden" name="id_permohonan" value="<?php echo $row['id_permohonan']; ?>">
																	<input type="hidden" name="nomor" value="<?php echo $prx; ?>-00<?php echo $row['id_permohonan']; ?>">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-light-secondary" data-dismiss="modal">
																		<i class="bx bx-x d-block d-sm-none"></i>
																		<span class="d-none d-sm-block">Batal</span>
																	</button>
																	<button type="submit" name="terima" class="btn btn-success ml-1" >
																		<i class="bx bx-check d-block d-sm-none"></i>
																		<span class="d-none d-sm-block">VALIDASI</span>
																	</button>
																</div>
															</div>
														</div>
														</form>
													</div>
													<div class="modal fade text-left" id="tolak<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
														<form action="" method="post">
														<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header bg-danger">
																	<h4 class="modal-title text-white" id="myModalLabel17">Tolak Permohonan</h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<i class="bx bx-x"></i>
																	</button>
																</div>
																<div class="modal-body">
																	<h5>Yakin akan menolak proses permohonan <strong><?php echo $prx; ?>-00<?php echo $row['id_permohonan']; ?></strong> ?<br> <br></h5>
																	<fieldset class="form-group">
																		<label for="basicInput">Alasan Penolakan</label>
																		<textarea name="keterangan" id="" cols="30" rows="10" class="form-control" required></textarea>
																	</fieldset>
																	<input type="hidden" name="id_permohonan" value="<?php echo $row['id_permohonan']; ?>">
																	<input type="hidden" name="nomor" value="<?php echo $prx; ?>-00<?php echo $row['id_permohonan']; ?>">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-light-secondary" data-dismiss="modal">
																		<i class="bx bx-x d-block d-sm-none"></i>
																		<span class="d-none d-sm-block">Batal</span>
																	</button>
																	<button type="submit" name="tolak" class="btn btn-danger ml-1" >
																		<i class="bx bx-check d-block d-sm-none"></i>
																		<span class="d-none d-sm-block">TOLAK</span>
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