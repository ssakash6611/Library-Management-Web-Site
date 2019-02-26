<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
  $result = mysqli_query($con,"SELECT book.name,book.price,book.availabe,author.authorname,publisher.name,publisher.Address,publisher.city,book.id FROM book,publisher,author WHERE publisher.id=book.publisherid AND author.bookid=book.id");
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
      <title>confirmation</title>
    </head>

    <body>
     <div class="container">
        <h1 class="light-blue"><em>The Book Has Added to Your Account</em></h1>
        <a href="2userhome.php" class="waves-effect waves-teak btn-flat light-blue right">OK</a>
     </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
  </html>
  <?php
} else if($_SESSION['login'] == ''){
    header('location:1userlogin.php');
  }
?>