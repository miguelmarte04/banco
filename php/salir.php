<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['correo'];
if($varsesion==null || $varsesion=''){
    header("location:../index.php");
    die();
}

session_destroy();
header("location:../index.php");
?>