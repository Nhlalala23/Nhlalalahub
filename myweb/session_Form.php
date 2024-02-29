<?php
session_start();

// checking if the form is submitted then store data into session variables
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_SESSION["Fname"] =$_POST["Name"];
    $_SESSION["Lname"] =$_POST["Surname"];
    $_SESSION["email"] =$_POST["Email"];
    $_SESSION["paswd"] =$_POST["password"];

    //database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webBd";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

// Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

    }


    //sql statement
    $sql = $conn->prepare("INSERT INTO accounts (Fname,Lname,email,pass)  VALUES( $name,$urname,$email,$password");
    $sql->bind_param("ss" , $name,$urname,$email,$password);

    //execute statement

    if($sql->execute() ===TRUE)
    {
        header("Location: confirm.php");
        exit();
    }
    else{
        echo" Error:" .$sql->error;
    }

//close prepared statement 
$sql->close();

//close database connection

$conn->close();
   
}


?>