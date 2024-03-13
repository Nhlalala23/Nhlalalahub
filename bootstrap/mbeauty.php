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







$conn->close();
?>