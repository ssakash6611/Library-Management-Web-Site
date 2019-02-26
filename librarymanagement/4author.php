<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
  $result = mysqli_query($con,"SELECT book.name,author.authorname from book,author where book.id=author.bookid");
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
      <title>Author</title>
    </head>
<body>
   <div class="container">
             <table class="striped">
                    <thead>
                      <tr>
                          <th>BookName</th>
                          <th>AuthorName</th>
                      </tr>
                    </thead>
                    <?php
                       while($row = mysqli_fetch_row($result)){
                    ?>
                    <tbody>
                        <tr>
                           <td><?php echo $row[0];?></td>
                           <td><?php echo $row[1];?></td>
                      </tr>                        
                    </tbody>
                    <?php
                         }
                     ?>
             </table>
			 <a href="logout.php" class="waves-effect waves-teak btn-flat light-blue">Log out</a>
       <a href="3adminhome.php" class="waves-effect waves-teak btn-flat light-blue">Back</a>
       <a href="3adminhome.php" class="waves-effect waves-teak btn-flat light-blue">Home</a>
       <a href="5addpublisher.php" class="btn-floating red btn-large right"><i class="large material-icons">add</i></a>
   </div>
</body>
<br><br>
 
</html>
<?php
} else if($_SESSION['login'] == ''){
		header('location:1adminlogin.php');
	}
?>