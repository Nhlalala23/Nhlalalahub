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
    
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // getting form data
    $name =$_POST["Name"];
    $email =$_POST["email"];
    $phone =$_POST["phone"];
    $message = $_POST["message"];

    //process the request
    $send = "mthombeninhlalala41@gmail.com";
    $subject = "request from a customer";
    $body ="Name: $name\nEmail: $email\nMessage: $message";

    if(mail($send,$subject,$body))
    {
        echo"Thank you for contacting us, we will get back to you soon.";

    }else{
        echo"Sorry, there was an error sending your message. please try again";
    }
}

?>