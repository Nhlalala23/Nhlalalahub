<?php
//collecting form data

$name = $_POST['Fname'];
$surname = $_POST['Lname'];
$email = $_POST['email'];
//$password =$_POST['password'];

//
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
echo"<br>";

//sql statememnt: for inserting data from form to table account

$sql = "INSERT INTO Account (firstname,lastname,email,) VALUES ('$name','$surname','$email')";

if($conn->query($sql)===TRUE)
{
  echo"Data inserted sucessfully ";
}
else{
  echo"ERROR: ".$sql . "<br>" . $conn->error;
}

$conn->close();
?>