<?php
ob_start();
session_start();
$nama = $_SESSION['nama'];
$id_operator = $_SESSION['id_operator'];
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php');
}
ob_flush(); ?>