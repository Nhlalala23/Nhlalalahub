<?php
session_start();
//database connetion
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
echo"Connected";

//handling log in submission
if($_SERVER["REQUEST_METHODE"] =="POST"){
    $user_name =$_POST['Email'];
    $pwd =$_POST['pswd'];

//fetching database to fetch user details on database

    $sql ="SELECT * FROM account 
    WHERE 'Email'='$user_name";
    $results =$conn->query($sql);


    if($results->num_rows == 1){
        $row = $results->fetch_assoc();

        if(password_verify($pwd,$row['pswd'])){
            //password_verify to verify if the password matches
            
        }
    }


}


?>