<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--Bootstrap cdn link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Mtihani</title>
   <!--www.mtihani.co.ke-->
</head>
<body>

    <!--reset password form-->
    <div class = "container">
        <div style= "width:400px; margin : 0 auto;">
        <p class="bg-info"> <center><h1>Mtihani Management System</h1></center></p>
         <center><h4><em><small>your true examining patner</small></em></h4></center> 
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <p class="text-succcess"><center><h2>Reset Password<h2></center></p>
                    <hr/>
                    <center>
                    <div class = "form-group">
                        <label for = "username" class = "control-label"> username</label></br>
                        <input type="username" name = "username" class = "form-control" autocomplete="off">
                    </div>
                    </center>
            
                    <center>
                    <div class = "form-group">
                        <label for = "email" class = "control-label"> Email </label></br>
                        <input type="email" name = "email" class = "form-control" autocomplete="off">
                    </div>
                    </center>
                    <center>
                    <div class = "form-group">
                        <label for = "phonenumber" class = "control-label">Phone Number </label></br>
                        <input type="phonenumber" name = "phonenumber" class = "form-control" autocomplete="off">
                    </div>
                    </center>
                    <center>
                    <div class = "form-group">
                        <label for = "resetcode" class = "control-label"> Enter Reset code  </label></br>
                        <input type="resetcode" name = "resetcode" class = "form-control" autocomplete="off">
                    </div>
                    </center>
                    
            
                    <center>
                    <div class = "form-group">
                        <input type="submit" value = "Reset" class ="btn btn-primary" >
                    </div>
                    </center>
            
            
                    <center>
                    <div class = "form-group">
                        <a href = "index.php">Login In<a>
                    </div>
                    </center>
                    <hr/>
                    <center>
                    <div class = "form-group">
                        <a href = "register.php">Register school<a>
                    </div>
                    </center>

              </form>
        </div>

        <center>
        <footer>
            <small>&copy; Copyright 2019, Soma Solutions</small>
        </footer>
        </center>
    </div>
</body>
</html>
 