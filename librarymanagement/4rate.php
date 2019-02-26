<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
  $sql = "SELECT user.name,book.name,rate.rating FROM user,rate,book WHERE rate.userid=user.id AND rate.bookid=book.id";
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
                          <th>Rating</th>
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

                      </tr>                        
                    </tbody>
                    <?php
                         }
                     ?>
             </table>
             <h3 class="light-Grey">Grouped Book Rating Result</h3>
             <?php
                        $sql = "SELECT book.name,AVG(rate.rating) FROM rate,book WHERE rate.bookid=book.id group by book.id";
                        $result = mysqli_query($con,$sql)or die(mysql_error());
                     ?>
                     <table class="striped">
                   <thead>
                      <tr>
                          <th>BookName</th>
                          <th>Rating</th>
                      </tr>
                    </thead>
                    <?php
                       while($row =  mysqli_fetch_array($result)){
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
   </div>
</body>
<br><br>
 
</html>
<?php
} else if($_SESSION['login'] == ''){
		header('location:1adminlogin.php');
	}
?>