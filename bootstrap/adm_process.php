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
    $use_rname = $_POST['username'];
    $email =$_POST['Email'];
    $pass =$_POST['password'];

    //checking for empty fields
    if(empty($user_name)|| empty($email) || empty($pass)){
        echo"Please fill in the empty fields";

    }

    //hash the password -->security
    $hashpaswd = password_hash($pass,PASSWORD_DEFAULT);


}



?>