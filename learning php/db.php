<?php
//database

$servername ="localhost";
$username ="root";
$password ="";
$dababase ="myfirstdb";


//connection

$conn = new mysqli($servername,$username,$password,$dababase);

if($conn->connect_error)
{
    die("connection failed: ". $conn->connect_error);

}
echo "Connected";



// creating a table 
 $sql = "CREATE TABLE Account(
    acc_id INT(5) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 )";

 //CHECKING IF TABLE IS CREATED
 if($conn->query($sql)===TRUE)
 {
    echo "Table Account created sucessfully <br>";
 }
 else {
    echo "<br> table not created";
 }
 echo"<br>";
 
 //inserting data 
 $sql ="INSERT INTO Account(firstname,lastname,email)
 VALUES ('Nhlalala','Mthombeni','lala@gmail.com')";

 if($conn->query($sql)===TRUE)
 {
    echo"<br> added suceffully <br>";
 }
 else{
   echo"Error: <br>" .$conn->error;
 }
 $conn->close();

?>