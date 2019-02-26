  <?php
include'config.php';
if($_SESSION['login'] == 'logged_in'){
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$id'");
while($row=mysqli_fetch_array($result)){
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
      <title>Editing Profile</title>
 
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

             <div class="row">
                <form class="col s12 left" method="post" action="edituserdatabase.php" enctype="multipart/form-data" >
                  <div class="row">
                    <div class="input-field col s12">
                      Name: <input type='text' name="name" value ="<?php echo $row['name'];?>"/>
                    </div>
                    </div>
                <div class="row">
                    <div class="input-field col s12">
                      email: <input type='email' name="email" value ="<?php echo $row['email'];?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      Password: <input type='password' name="password" value ="<?php echo $row['password'];?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      Photo: <input type="file" name="img" /><br><br>
                      <input type = "hidden" name = "id" value = "<?php echo $row['id'];?>"/><br><br>
                    </div>
                  </div>
                <input class="waves-effect waves-teak btn-flat light-blue" type="submit" value="Edit"/>
               <a href="ulogout.php" class="waves-effect waves-teak btn-flat light-blue">Log out</a>
                </form>
              </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
    </html>
    <?php 
   }
   } else if($_SESSION['login'] == ''){
    header('location:1userlogin.php');
  }
?>

 

