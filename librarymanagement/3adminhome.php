<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Admin Home</title>
    </head>
<body>
   <div class="container">
			 <div class="collection">
			 	<h1 class="grey">What do U want to see?</h1>
			    <a href="4book.php" class="collection-item">Available Books</a>
			    <a href="4publisher.php" class="collection-item">Publishers</a>
			    <a href="4borrow.php" class="collection-item">Borrowed Books</a>
			    <a href="4author.php" class="collection-item">Author</a>
			    <a href="4rate.php" class="collection-item">Ratings</a>
			    <a href="4user.php" class="collection-item">Users</a>
			 </div>
			 <a href="logout.php" class="waves-effect waves-teak btn-flat light-blue">Log out</a>
   </div>
</body>
<br><br>
 
</html>
<?php
} else if($_SESSION['login'] == ''){
		header('location:1adminlogin.php');
	}
?>