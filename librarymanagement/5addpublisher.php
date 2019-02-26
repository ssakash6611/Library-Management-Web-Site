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
      <title>addpublisher</title>
    </head>

    <body>
     <div class="container">

             <div class="row">
                <form class="col s12" method="post" action="6uploadpublisher.php">
                  <div class="row">
                    <div class="input-field col s12">
                      Name: <input type='text' name="name" placeholder="Write the Publisher Name"/>
                    </div>
                    </div>
                <div class="row">
                    <div class="input-field col s12">
                      Address: <input type='text' name="Address" placeholder="Write the address"/>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="input-field col s12">
                      City: <input type='text' name="city" placeholder="Which city?"/>
                    </div>
                 </div>

                <button class="waves-effect waves-teak btn-flat light-blue" type="submit">Upload</button>
                <a href="4publisher.php" class="waves-effect waves-teak btn-flat light-blue">Back</a>
                 <a href="3adminhome.php" class="waves-effect waves-teak btn-flat light-blue">Home</a>
                </form>
              </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
    </html>
<?php
} else if($_SESSION['login'] == ''){
		header('location:1adminlogin.php');
	}
?>