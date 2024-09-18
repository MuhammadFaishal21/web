<?php
ob_start();
session_start();
$nama = $_SESSION['nama'];
$id_user = $_SESSION['id_user'];
$id_penduduk = $_SESSION['id_penduduk'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '2'){
    session_destroy();
    header('Location: login.php');
}
ob_flush(); ?>