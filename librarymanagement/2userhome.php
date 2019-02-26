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
      <title>User Home</title>
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
                          <th>BookName</th>
                          <th>Price</th>
                          <th>Available</th>
                          <th>Writer</th>
                          <th>Publisher</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Rate</th>



                      </tr>
                    </thead>
                    <?php
                       while($row = mysqli_fetch_array($result)){
                    ?>
                    <tbody>
                        <tr>
                           <td><?php echo $row[0];?></td>
                           <td><?php echo $row[1];?></td>
                           <td><?php echo $row[2];?></td>
                           <td><?php echo $row[3];?></td>
                           <td><?php echo $row[4];?></td>
                           <td><?php echo $row[5];?></td>
                           <td><?php echo $row[6];?></td>
                          <td><a href ='rate.php?id=<?php echo $row[7];?>'>Rate</a></td>
                           <?php
                           if($row[2]>0){
                            ?>
                            <td><a href ='borrowbook.php?id=<?php echo $row[7];?>'>Borrow</a></td>
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