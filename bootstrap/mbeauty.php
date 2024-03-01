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

$sql1= "CREATE TABLE account(
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
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

$conn->close();

?>