  <!DOCTYPE html>
  <html>
   
    <head>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>adminlogin</title>
 
    </head>

    <body>
      <div class="container middle right down box">

             <div class="row">
                <form class="col s12 left" method="post" action="uploaduser.php" enctype="multipart/form-data" >
                  <div class="row">
                    <div class="input-field col s12">
                      Name: <input type='text' name="name" placeholder="Write Your Name"/>
                    </div>
                    </div>
                <div class="row">
                    <div class="input-field col s12">
                      email: <input type='email' name="email" placeholder="example@###.com"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      Password: <input type='password' name="password"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      Photo: <input type="file" name="img"/>
                    </div>
                  </div>
                <input class="waves-effect waves-teak btn-flat light-blue" type="submit" />
                </form>
              </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
    </html>

 

