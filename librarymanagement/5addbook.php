<?php
include 'config.php';
if($_SESSION['login'] == 'logged_in'){
	$result = mysqli_query($con,"SELECT * FROM `publisher`");
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
      <title>addbook</title>
    </head>

    <body>
     <div class="container">

             <div class="row">
                <form class="col s12 left" method="post" action="6uploadbook.php">
                  <div class="row">
                    <div class="input-field col s6">
                      Name: <input type='text' name="name" placeholder="Write the Book Name"/>
                    </div>
                
                    <div class="input-field col s6">
                      Price: <input type='text' name="price" placeholder="What is the price?"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      Available: <input type='text' name="availabe" placeholder="How much Book?"/>
                    </div>
                 
                    <div class="input-field col s6">
                      Publisher ID: <input type='text' name="publisherid" placeholder="Who publish the Book?"/>
                    </div>
                  </div>
                <button class="waves-effect waves-teak btn-flat light-blue" type="submit">Upload</button>
                <a href="4book.php" class="waves-effect waves-teak btn-flat light-blue">Back</a>
                 <a href="3adminhome.php" class="waves-effect waves-teak btn-flat light-blue">Home</a>
                </form>
              </div>
                <table class="striped right light-blue col s4">
                    <thead>
                      <tr>
                      	  <th>ID</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>City</th>
                          
                      </tr>
                    </thead>
                    <?php

                       while($row = mysqli_fetch_array($result)){
                    ?>
                    <tbody>
                        <tr>
                        	<td><?php echo $row['id'];?></td>
                           <td><?php echo $row['name'];?></td>
                           <td><?php echo $row['Address'];?></td>
                           <td><?php echo $row['city'];?></td> 
                      </tr>                        
                    </tbody>
                    <?php
                         }
                     ?>
             </table>
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