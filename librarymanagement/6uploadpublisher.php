<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
$name=$_POST['name'];
$Address=$_POST['Address'];
$city=$_POST['city'];
mysqli_query($con,"INSERT INTO `publisher` (`name`,`Address`,`city`) VALUES ('$name','$Address','$city')"); 
header('location:4publisher.php');
} else if($_SESSION['login'] == ''){
		header('location:1adminlogin.php');
	}
?>