<?php
$servername = "localhost";
$database = "mtihani";
$username = "root";
$password = "";

// Create connection

$conn = new mysqli ($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: ".$cnn->connect_error);

}
echo "Connected successfully";
mysqli_close($conn);
?>