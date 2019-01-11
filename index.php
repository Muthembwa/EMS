<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online EMS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="main.js"></script>
   
   <!--www.mtihani.co.ke-->
</head>
<body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!--Login form-->
    <div class = "container">
        <div style= "width:400px; margin : 0 auto;">
        <p class="bg-info"> <center><h1>Mtihani Management System</h1></center></p>
         <center><h4><em><small>your true examining patner</small></em></h4></center> 
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <p class="text-succcess"><center><h2>Log in</h2></center></p>
                    <hr/>
                    </br>
                    </br>
                    <center>
                    <div class = "form-group">
                        <label for = "email" class = "control-label"> Email </label></br>
                        <input type="email" name = "email" class = "form-control" autocomplete="off">
                    </div>
                    </center>
                    
                    
                    <center>
                    <div class = "form-group">
                        <label for = "password" class = "control-label"> Password </label></br>
                        <input type="password" name = "password" class = "form-control" autocomplete="off">
                    </div>
                    </center>
                    </br>
                    <center>
                    <div class = "form-group">
                        <input type="submit" value = "Login" class ="btn btn-success" >
                    </div>
                    </center>
                    </br>
                    </br>
                    <center>
                    <div class = "form-group">
                        <a href = "resetpassword.php">Reset Password<a>
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
        </br>
        <center>
        <footer>
            <small>&copy; Copyright 2019, Soma Solutions</small>
        </footer>
        </center>
    </div>
</body>
</html>
 