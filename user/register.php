<?php ob_start(); session_start(); include '../koneksi.php'; ?>
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
    <title>Register Page - Pakualam</title>
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- register section starts -->
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- register section left -->
                                <div class="col-md-6 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
										<?php 
											if(isset($_POST['register'])){
												$nik	 		= $_POST['nik'];
												$no_hp	 		= $_POST['no_hp'];
												$email	 		= $_POST['email'];
												$nama	 		= $_POST['nama'];
												$kota_lahir		= $_POST['kota_lahir'];
												$tanggal_lahir 	= $_POST['tanggal_lahir'];
												$agama	 		= $_POST['agama'];
												$status_nikah 	= $_POST['status_nikah'];
												$shdk	 		= $_POST['shdk'];
												$pekerjaan	 	= $_POST['pekerjaan'];
												$password 		= md5($_POST['password']);
												$sql 			= "select * from penduduk where nik='".$nik."'";
												$query 			= mysql_query($sql) or die (mysql_error());
												$sq 			= "select * from user where no_hp='".$no_hp."' or email='".$email."'";
												$quer			= mysql_query($sq) or die (mysql_error());
												// pengecekan query valid atau tidak
												if($query){
													$row 	= mysql_num_rows($query);
													$rows 	= mysql_fetch_array($query);
													$ro 	= mysql_num_rows($quer);
													// jika $row > 0 atau username dan password ditemukan
													if($ro > 0){	
														echo 				
														"<div class='alert alert-danger alert-dismissable'>
															<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
															<h5 align='center' class='text-white'>Pendaftaran Gagal ! <br>Email atau Nomor Telepon Anda Telah Terdaftar. Gunakan yang lain atau hubungi operator</h5>
														</div>";
													} else {			
													if($row > 0){
														echo 				
														"<div class='alert alert-danger alert-dismissable'>
															<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
															<h5 align='center' class='text-white'>NIK anda TELAH TERDAFTAR ! <br>silahkan ulangi kembali atau hubungi operator kelurahan untuk bantuan</h5>
														</div>";
													}else{			
														$sql1		= "insert into user (no_hp, email, password) values ('$no_hp','$email','$password')";
														$query1 	= mysql_query($sql1) or die (mysql_error());
														$idpen		= mysql_insert_id();
														$sql3		= "insert into penduduk (nik, nama, kota_lahir, tanggal_lahir, agama, status_nikah, shdk, pekerjaan, id_user) values ('$nik','$nama','$kota_lahir','$tanggal_lahir','$agama','$status_nikah','$shdk','$pekerjaan','". $idpen ."')";
														$query3 	= mysql_query($sql3) or die (mysql_error());
															echo 				
															"<div class='alert alert-success alert-dismissable'>
																<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
																<h5 align='center' class='text-white'>Pendaftaran BERHASIL ! <br>silahkan kembali ke menu login untuk masuk kedalam sistem</h5>
															</div>";
														}
													}
												}
											}
											if(isset($sukses)) { echo $sukses; }
											if(isset($gagal)) { echo $gagal; }
										?>
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2"><img src="../assets/logo.png" width="100" alt=""/><br><br>Pendaftaran</h4>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Nomor Induk Kependudukan</label>
                                                        <input type="text" class="form-control" name="nik" id="exampleInputUsername1" placeholder="input nomor induk kependudukan anda">
													</div>
													<div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="nama" id="exampleInputUsername1" placeholder="input nama lengkap anda">
													</div>
													<div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Kota Kelahiran</label>
                                                        <input type="text" class="form-control" name="kota_lahir" id="exampleInputUsername1" placeholder="input kota kelahiran anda">
													</div>
													<div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Tanggal Kelahiran</label>
                                                        <input type="date" class="form-control" name="tanggal_lahir" id="exampleInputUsername1" placeholder="input tanggal kelahiran anda">
													</div>
													<div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Agama</label>
														<select name="agama" id=""class="form-control" >
															<option value="ISLAM">ISLAM</option>
															<option value="KATOLIK">KATOLIK</option>
															<option value="PROTESTAN">PROTESTAN</option>
															<option value="HINDU">HINDU</option>
															<option value="BUDHA">BUDHA</option>
															<option value="KONGHUCHU">KONGHUCHU</option>
														</select>
													</div>
													<div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Status Pernikahan</label>
														<select name="status_nikah" id=""class="form-control" >
															<option value="LAJANG">LAJANG</option>
															<option value="MENIKAH">MENIKAH</option>
															<option value="DUDA/JANDA">DUDA/JANDA</option>
														</select>
													</div>
													<div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputUsername1">Status Hubungan Dalam Keluarga</label>
														<select name="shdk" id=""class="form-control" >
															<option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
															<option value="SUAMI">SUAMI</option>
															<option value="ISTRI">ISTRI</option>
															<option value="ANAK">ANAK</option>
															<option value="ORANG TUA">ORANG TUA</option>
															<option value="MERTUA">MERTUA</option>
															<option value="FAMILY LAIN">FAMILY LAIN</option>
														</select>
													</div>
													<div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputEmail1">Pekerjaan</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" name="pekerjaan" placeholder="input pekerjaan anda">
													</div>
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputEmail1">Alamat Email</label>
                                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="input alamat email anda">
													</div>
													<div class="form-group mb-50">
                                                        <label class="text-bold-600" for="exampleInputEmail1">Nomor Handphone</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" name="no_hp" placeholder="input nomor ponsel anda">
													</div>
                                                    <div class="form-group mb-2">
                                                        <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="input kata sandi anda">
                                                    </div>
                                                    <button type="submit" name="register" class="btn btn-primary glow position-relative w-100">DAFTAR<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                </form>
                                                <hr>
                                                <div class="text-center"><small class="mr-25">Sudah Punya Akun ?</small><a href="login.php"><small>LOGIN DISINI !</small> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- image section right -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                    <img class="img-fluid" src="../app-assets/images/pages/login.png" alt="branding logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- register section endss -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


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
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>