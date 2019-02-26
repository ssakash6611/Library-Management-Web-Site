<?php
include'config.php';
if($_SESSION['login'] == 'logged_in'){
	$id=$_GET['id'];
	$re=mysqli_query($con,"SELECT bookid FROM `borrow` WHERE `userid`='$id'");
	$row = mysqli_fetch_array($re);
	$bookid=$row['bookid'];
	mysqli_query($con,"DELETE FROM `borrow` WHERE `userid`='$id' and `bookid`='$bookid'");
	mysqli_query($con,"UPDATE `book` SET availabe=availabe+1 WHERE `id`='$bookid'");
	header('location:3borrowedbooks.php');
	} else if($_SESSION['login'] == ''){
		header('location:1userlogin.php');
	}
?>