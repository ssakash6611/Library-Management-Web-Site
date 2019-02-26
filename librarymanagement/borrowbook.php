<?php
include'config.php';
if($_SESSION['login'] == 'logged_in'){
	$id=$_GET['id'];
	mysqli_query($con,"UPDATE `book` SET availabe=availabe-1 WHERE `id`='$id'");
	$userid =$_SESSION['id'];
    mysqli_query($con,"INSERT INTO `borrow`(`userid`,`bookid`,`borrowdate`,`returndate`) VALUES ('$userid','$id',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");
	header('location:message.php');
	} else if($_SESSION['login'] == ''){
		header('location:1userlogin.php');
	}
?>