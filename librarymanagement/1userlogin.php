<?php
include 'config.php';
  if(!isset($_SESSION['login'])){
    $_SESSION['login'] = '';
  }

  if($_SESSION['login'] == 'logged_in'){
    header('location:2userhome.php');
  }
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
      <title>Userlogin</title>
 
    </head>

    <body>
      <div class="container middle right down box">

             <div class="row">
                <form class="col s7" method="post" action="22docheck.php">
                  <div class=""><h3>please login</h3></div>
                  <div class="row">
                    <div class="input-field col s12">
                      E-mail: <input type='email' name="email" placeholder="Write your E-mail ID"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      Password: <input type='password' name="password" placeholder="Password"/>
                    </div>
                  </div>
                  <input class="waves-effect waves-teak btn-flat light-blue" type='submit' value="Login" />
                  <a href="omain.html" class="waves-effect waves-teak btn-flat light-blue">Back</a>
                  <a href="usersignup.php" class="waves-effect waves-teak btn-flat light-blue">Sign up</a>
                </form>
              </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
    </html>

 

