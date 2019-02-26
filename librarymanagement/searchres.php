<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
$name=$_POST['search'];
  $result = mysqli_query($con,"SELECT * from `book` where `name` like '%$name%'");
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
      <title>Search Result</title>
    </head>
<body>
  <div class="container">
      <nav>
         <div class="nav-wrapper">
           <form method="post" action="searchres.php">
              <div class="input-field">
                <input type="search" name="search" placeholder="Search for book">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
        <nav>
           <div class="nav-wrapper">
             <a href="" class="brand-logo right"></a>
             <ul id="nav-mobile" class="left hide-on-med-and-down">
               <li><a href="2userhome.php">Home</a></li>
               <li><a href="3borrowedbooks.php">Update of Books</a></li>
               <li><a href="3userprofile.php">Profile</a></li>
             </ul>
           </div>
      </nav>
   
             <table class="striped">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Available</th>
                          <th>Publisher</th>



                      </tr>
                    </thead>
                    <?php
                       while($row = mysqli_fetch_array($result)){
                    ?>
                    <tbody>
                        <tr>
                           <td><?php echo $row['name'];?></td>
                           <td><?php echo $row['price'];?></td>
                           <td><?php echo $row['availabe'];?></td>
                           <td><?php echo $row['publisherid'];?></td>
                        <?php
                           if($row[2]>0){
                        ?>
                            <td><a href ='borrowbook.php?id=<?php echo $row[0];?>'>Borrow</a></td>
                        <?php
                           }
                        ?>
                      </tr>                        
                    </tbody>
                    <?php
                         }
                     ?>
             </table>
			 <a href="ulogout.php" class="waves-effect waves-teak btn-flat light-blue">Log out</a>
       <a href="5addbook.php" class="btn-floating red btn-large right"><i class="large material-icons">add</i></a>
   </div>
</body>
<br><br>
 
</html>
<?php
} else if($_SESSION['login'] == ''){
		header('location:1userlogin.php');
	}
?>