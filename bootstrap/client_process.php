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

$user_name =$_POST["Email"];
$pwd = $_POST["pwd"];

//hash the password
$hashed_pswd = password_hash($pwd , PASSWORD_BCRYPT);

//SQL INSERT 
$sql = "INSERT INTO   account(email,pass) VALUES('$user_name','$pwd') ";

if($conn->query($sql) == TRUE)
{
    echo"$user_name You are registered";
}
else {
    echo"Error: " .$sql . "<br>" . $conn->error;
}
$conn->close();


?>