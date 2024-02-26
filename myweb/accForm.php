<?php
//storing data from form to database

//connection first
$servername = "localhost";
$username = "root";
$password = "";
$database = "webBd";

$conn = new mysqli($servername,$username,$password,$database);

//check connection
 
if($conn->connect_error)
{
    die("Connection error: " .$conn->connect_error);
}
echo"Connected <br>";

//retrieving form data
$fname =$_POST['Name'];
$Lname =$_POST['Surname'];
$email =$_POST['Email'];
$password =$_POST['password'];

//inserting retrieved data to database
$sql ="INSERT INTO accounts(Fname,Lname,email,pass) 
VALUES ('$fname','$Lname','$email','$password')";

// checking if data was addednto database

if($conn->query($sql)===TRUE){
    echo"data added suceffully";

}
else{
    echo"Error: " . $conn->connect_error ."<br>";
}
?>