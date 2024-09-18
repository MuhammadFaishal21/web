<?php
ob_start();
session_start();
$nama = $_SESSION['nama'];
$id_lurah = $_SESSION['id_lurah'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '3'){
    session_destroy();
    header('Location: login.php');
}
ob_flush(); ?>