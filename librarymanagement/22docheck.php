<?php
include 'config.php';
$email 		= $_POST['email'];
$password 	= $_POST['password']; 

$result = mysqli_query($con,"SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");

	while($row = mysqli_fetch_array($result)){
		$_SESSION['login'] 	= 'logged_in';
		$_SESSION['id'] 	= $row['id'];
	}
	if($_SESSION['login'] == 'logged_in'){
		header('location:2userhome.php');
	} else if($_SESSION['login'] == ''){
		header('location:1userlogin.php');
	}
?>