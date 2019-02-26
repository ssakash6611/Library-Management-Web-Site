<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
$name=$_POST['name'];
$price=(int)$_POST['price'];
$availabe=(int)$_POST['availabe'];
$publisherid=(int)$_POST['publisherid'];
mysqli_query($con,"INSERT INTO `book` (`name`,`price`,`availabe`,`publisherid`) VALUES ('$name','$price','$availabe','$publisherid')"); 
header('location:4book.php');
} else if($_SESSION['login'] == ''){
		header('location:1adminlogin.php');
	}
?>
