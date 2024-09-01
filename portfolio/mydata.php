<?php
$servername ="localhost";
$username="root";
$password ="";
$dbname ="myContacts_db";

//connecting to mysql
$conn =new mysqli($servername,$username,$password,$dbname);

//checking if connected
if($conn->connect_error)
{
    die("Not connected: " .$conn->connect_error);
}

//checking if is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =$_POST['name'];
    $email = $_POST['email'];
    $message =$_POST['message'];

    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    
    // execute the statement

    if($stmt->execute()){
        echo "New record created suceffully";
    }
    else{
        echo"Error: ".$stmt->error;
    }
    $stmt->close();
}
$conn->close();




$conn->close();
?>
