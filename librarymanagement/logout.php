<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
$_SESSION['login'] 	= '';
$_SESSION['id'] 	= '';
header('location:1adminlogin.php');
} else if($_SESSION['login'] == ''){
		header('location:1adminlogin.php');
	}
?>

