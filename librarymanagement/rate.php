<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
	$bookid=$_GET['id'];
	$re = mysqli_query($con,"SELECT name from book where id=$bookid");
	$row = mysqli_fetch_array($re);
	$bookname=$row['name'];
	$_SESSION['bookid']=$bookid;
  $result = mysqli_query($con,"SELECT bookid,AVG(rating) as rate from rate where bookid=$bookid group by bookid");
  while($row = mysqli_fetch_array($result)){
?>
Name of the Book: <?php echo $bookname;?><br><br>
Rating is : <?php echo $row['rate'];}?><br><br>

Would You Like to Give Your Rating?<br>Please Rate Here :

									<form method="POST" action="ratecal.php">
									    <input type="radio" name="MyRadio" value="1">
									    <input type="radio" name="MyRadio" value="2">
									    <input type="radio" name="MyRadio" value="3">
									    <input type="radio" name="MyRadio" value="4">
									    <input type="radio" name="MyRadio" value="5">
									    <input type="radio" name="MyRadio" value="6">
									    <input type="radio" name="MyRadio" value="7">
									    <input type="radio" name="MyRadio" value="8">
									    <input type="radio" name="MyRadio" value="9">
									    <input type="radio" name="MyRadio" value="10"><br>
									    <input type="submit" value="Submit" name="Result">
									</form>

  <?php
} else if($_SESSION['login'] == ''){
    header('location:1userlogin.php');
  }
?>
