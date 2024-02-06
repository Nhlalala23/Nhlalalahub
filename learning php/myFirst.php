<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="myfirstdb";

//Connecting
$conn = new mysqli($servername,$username,$password,$database);

//checking if connected

if($conn->connect_error){
    die("Connection error: ". $conn->connect_error);
}
echo"Conntected";

//Table

$sql ="CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Fname VARCHAR(50) NOT NULL,
    Lname VARCHAR(50) NOT NULL,
    email VARCHAR(50)
)";

if($conn->query($sql)==True){
    echo"Table created successfully";
}
else{
    echo"Table not created successfully";
}

$conn->close();
?>



