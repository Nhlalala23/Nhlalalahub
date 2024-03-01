<?php

//create a database

$servername ="localhost";
$username="root";
$password ="";

//connecting to mysql
$conn =new mysqli($servername,$username,$password);

//checking if connected
if($conn->connect_error)
{
    die("Not connected: " .$conn->connect_error);
}
echo"connected <br>";

//creating a database
$sql ="CREATE DATABASE M_Beauty";

if($conn->query($sql) === TRUE){
    echo"Database created successfully";
}
else{
    echo "Error : " . $conn->connect_error;
}




$conn->close();



?>




