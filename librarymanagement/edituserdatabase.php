<?php
include'config.php';
if($_SESSION['login'] == 'logged_in'){
	 $id = $_POST['id'];
         $name = $_POST['name'];
		 $email = $_POST['email'];
         $password = $_POST['password'];
         
		 $id = $_POST['id'];
	mysqli_query($con,"UPDATE `user` SET `name`='$name' ,`email` = '$email' , `password` = '$password' WHERE `id`='$id'");
	    move_uploaded_file($_FILES['img']['tmp_name'],'user/photo_'.$id.'.jpg');
        header('location:3userprofile.php');
} else if($_SESSION['login'] == ''){
		header('location:1userlogin.php');
	}
 
?>