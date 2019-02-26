<?php
include'config.php';
if($_SESSION['login'] == 'logged_in'){
	$bookid=$_SESSION['bookid'];
	$userid=$_SESSION['id'];
$radioVal = $_POST['MyRadio'];
if($radioVal == "1")
{
    $rate=1;
}
else if ($radioVal == "2")
{
    $rate=2;
}
else if ($radioVal == "3")
{
    $rate=3;
}
else if ($radioVal == "4")
{
    $rate=4;
}
else if ($radioVal == "5")
{
    $rate=5;
}
else if ($radioVal == "6")
{
    $rate=6;
}
else if ($radioVal == "7")
{
    $rate=7;
}
else if ($radioVal == "8")
{
    $rate=8;
}
else if ($radioVal == "9")
{
    $rate=9;
}
else if ($radioVal == "10")
{
    $rate=10;
}

	mysqli_query($con,"INSERT INTO `rate` (`userid`,`bookid`,`rating`) VALUES ('$userid','$bookid','$rate')");
	header('location:2userhome.php');
	} else if($_SESSION['login'] == ''){
		header('location:1userlogin.php');
	}
?>
