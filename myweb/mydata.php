<?php

$servername ="localhost";
$username="root";
$password ="";
$database ="webBd";

//connection
$conn =new mysqli($servername,$username,$password,$database);

//checking if connected
if($conn->connect_error)
{
    die("Not connected: " .$conn->connect_error);
}

// creating tables
$sql1 ="CREATE TABLE member (
    meb_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    home_address VARCHAR(250))";
    
    //checking if thhe table is connected

    if($conn->query($sql1)===TRUE)
    {
        echo"Table created";
    }
    else{
        echo"Not connected: " . $conn->error;
    }

?>