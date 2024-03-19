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

// TABLES
$sql1= "CREATE TABLE CUSTOMER(
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    Fname VARCHAR(35) NOT NULL,
    email VARCHAR(30) NOT NULL,
    pass VARCHAR(250) NOT NULL
)";

if($conn->query($sql1)===TRUE)
{
    echo"Account was sucessfully created. ";
}
else{
    echo"Error :" . $conn->error;
}


$sql2 = "CREATE TABLE clients(
      id INT(5) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30),
      email VARCHAR(50),
      status ENUM('pending','approved','regected') NOT NULL DEFAULT 'pending',
      registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP

  
)";
if($conn->query($sql2)===TRUE)
{
    echo"<br>CLIENT was sucessfully created. ";
}
else{
    echo"Error :" . $conn->error;
}

$sql3 ="CREATE TABLE admin(
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


if($conn->query($sql3)===TRUE)
{
    echo"ADMIN was sucessfully created. ";
}
else{
    echo"Error :" . $conn->error;
}


//notification table

$sql4 ="CREATE TABLE notifications(
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    admin_id int NOT NULL,
    message TEXT NOT NULL,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_read TINYINT(1) NOT NULL DEFAULT 0,
    FOREIGN KEY (admin_id) REFERENCES admin(id)
)";



if($conn->query($sql4)===TRUE)
{
    echo"NOTIFICATIONS was sucessfully created. ";
}
else{
    echo"Error :" . $conn->error;
}




$conn->close();
?>