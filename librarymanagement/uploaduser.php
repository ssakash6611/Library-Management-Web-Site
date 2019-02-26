<?php
include 'config.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
mysqli_query($con,"INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')");
$id = mysqli_insert_id($con);
move_uploaded_file($_FILES['img']['tmp_name'],'images/photo_'.$id.'.jpg');
header('location:1userlogin.php');
?>