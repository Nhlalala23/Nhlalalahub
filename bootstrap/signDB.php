<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "M_Beauty";

//create connection
$conn = new mysqli($servername, $username, $password, $database);

// check if connected

if($conn->connect_error){
    die("not connected" .$conn->connect_error);
}
echo"connected <br>";

$user_name =$_POST['Email'];
$pwd = $_POST['password'];

//SQL INSERT 
$sql = "INSERT INTO ";
$conn->close();

?>
