<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
  $sql = "SELECT user.name,book.name,borrow.borrowdate,borrow.returndate FROM user,borrow,book WHERE borrow.userid=user.id AND borrow.bookid=book.id";
$result = mysqli_query($con,$sql)or die(mysql_error());

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
      <title>borrowed books</title>
    </head>
<body>
   <div class="container">
             <table class="striped">
                    <thead>
                      <tr>
                          <th>UserName</th>
                          <th>BookName</th>
                          <th>BorrowedTime</th>
                          <th>ReturnTime</th>
                      </tr>
                    </thead>
                    <?php
                       while($row =  mysqli_fetch_array($result)){
                    ?>
                    <tbody>
                        <tr>
                           
                           <td><?php echo $row[0];?></td>
                           <td><?php echo $row[1];?></td>
                           <td><?php echo $row[2];?></td>
                           <td><?php echo $row[3];?></td>

                      </tr>                        
                    </tbody>
                    <?php
                         }
                     ?>
             </table>
			 <a href="logout.php" class="waves-effect waves-teak btn-flat light-blue">Log out</a>
       <a href="3adminhome.php" class="waves-effect waves-teak btn-flat light-blue">Back</a>
       
       <a href="3adminhome.php" class="waves-effect waves-teak btn-flat light-blue">Home</a>
   </div>
</body>
<br><br>
 
</html>
<?php
} else if($_SESSION['login'] == ''){
		header('location:1adminlogin.php');
	}
?>