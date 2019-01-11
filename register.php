<!DOCTYPE html>
<?php 
include_once("dbcon.php"); 

if(isset($_POST['btn-register'])){
//clean user input to prevent sql injection
    $schoolname=$_POST['schoolName'];
    $schoolname=strip_tags($schoolname);
    $schoolname=htmlspecialchars($schoolname);

    $username=$_POST['examManager'];
    $username=strip_tags($username);
    $username=htmlspecialchars($username);

    $email=$_POST['email'];
    $email=strip_tags($email);
    $email=htmlspecialchars($email);

    $phoneno=$_POST['phoneNumber'];
    $phoneno=strip_tags($phoneno);
    $phoneno=htmlspecialchars($phoneno);

    $password=$_POST['password'];
    $password=strip_tags($password);
    $password=htmlspecialchars($password);

    $confirmpassword=$_POST['confirmPassword'];
    $confirmpassword=strip_tags($confirmpassword);
    $confirmpassword=htmlspecialchars($confirmpassword);

    //validate
    if( empty($username)){
        $error = true;
        $errorUsername = "Please input a user name";

    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = "Please input a valid  email";
    }
    if( empty($phoneno)){
        $error = true;
        $errorPhonenumber = "Phone Number cannot be empty";
    }
    //elseif(strlen($phoneno<10)&& strlen($phoneno>10)){   //validate only 10 digit phone number is provided
        //$error = true;
        //$errorPhonenumber = "Please enter a valid Phone Number";
   // }

    if( empty($password)){
        $error = true;
        $errorPassword = "Password cannot be empty";
    }elseif(strlen($password<8)){
        $error = true;
        $errorPassword = "Password must have atleast 8 characters";
    }

    if($password !=$confirmpassword){
        $error = true;
        $errorConfirmpassword = "Passwords do not match";

    }
    //encrypt password with md5
    $password = md5($password);

    //insert data if no error
    if(!$error){
        
        $sql = "INSERT INTO users (schoolname, username, email, phoneno, userpassword)
        VALUES ('$schoolname','$username','$email','$phoneno','$password')";   

        if($conn->query($sql)===TRUE){
            $successmsg = "Registration successful";
        }
        else{
            echo "Error Description:".$sql."<br>".$conn->error; 
        }
    }
}
$conn->close;
 ?>



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


    <!--Register form-->
    <div class = "container-fluid">
        <div style= "width:400px; margin : 0 auto;">
        <p class="bg-success"> <center><h1>Mtihani Management System</h1></center></p>
         <center><h4><em><small>your true examining patner</small></em></h4></center> 
              <form method="post" action="register.php" autocomplete="off">
                    <div class="header">
                        <p class="text-succcess"><center><h2>Register</h2></center></p>
                    </div>
                    <hr/>
                    <?php 
                     if(isset($successmsg)){
                    ?>
                        <div class = "alert alert-succeess">
                            <span class= "glyphicon glyphicon-info-sign"></span>
                            <?php echo $successmsg; ?>
                        </div>
                    <?php
                     }
                    ?>

                    <center>
                    <div class = "form-group">
                        <label for = "schoolName" class = "control-label"> School Name </label>
                        <input type="schoolName" name ="schoolName" class = "form-control" autocomplete="off" placeholder="Enter name of your school" required> 
                    </div>
                    </center>

                    <center>
                        <div class = "form-group">
                            <label for = "examManager" class = "control-label"> User Name </label>
                            <input type="examManager" name ="examManager" class = "form-control" autocomplete="off" placeholder="Choose a username" required>
                            <span class = "text-danger"><small><em><?php if (isset($errorUsername)) echo $errorUsername; ?></em></small></span>
                        </div>
                    </center>
                    <center>
                        <div class = "form-group">
                            <label for = "email" class = "control-label"> Email </label>
                            <input type="email" name = "email" class = "form-control" autocomplete="off" placeholder="example@example.com" required>
                            <span class = "text-danger"><small><em><?php if (isset($errorEmail)) echo $errorEmail; ?></em></small></span>
                        </div>
                    </center>
                    
                    <center>
                    <div class = "form-group">
                        <label for = "phoneNumber" class = "control-label"> Phone Number </label>
                        <input type="phoneNumber" name = "phoneNumber" class = "form-control" autocomplete="off" placeholder="To Send Important Notifications" required>
                        <span class = "text-danger"><small><em><?php if (isset($errorPhonenumber)) echo $errorPhonenumber; ?></em></small></span>
                    </div>
                    </center>

                    <center>
                    <div class = "form-group">
                        <label for = "password" class = "control-label"> Password </label>
                        <input type="password" name = "password" class = "form-control" autocomplete="off" placeholder="min 8 characters" required>
                        <span class = "text-danger"><small><em><?php if (isset($errorPassword)) echo $errorPassword; ?></em></small></span>
                    </div>
                    </center>

                     <center>
                    <div class = "form-group">
                        <label for = "confirmPassword" class = "control-label"> Confirm Password </label>
                        <input type="password" name = "confirmPassword" class = "form-control" autocomplete="off" placeholder="Repeat above passwords" required>
                        <span class = "text-danger"><small><em><?php if (isset($errorConfirmpassword)) echo $errorConfirmpassword; ?></em></small></span>
                    </div>
                    </center>


                    <center>
                    <div class = "form-group">
                        <input type="submit" name = "btn-register" value = "Register" class ="btn btn-primary" >
                    </div>
                    </center>
                    <hr/>
                    <center>
                    <div class = "form-group">
                        <a href = "index.php">Log in<a>
                    </div>
                    </center>

               </form>
        </div>
        <center>
        <footer>
            <small>&copy; Copyright 2019, Jafi Techbiz</small>
        </footer>
        </center>
    </div>
</body>
</html>
 