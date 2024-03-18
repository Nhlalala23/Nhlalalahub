<?php

session_start();
$severname ="localhost";
$username ="root";
$password ="";
$database = "M_Beauty";

$conn = new mysqli($severname,$username,$password,$database);

if($conn->connect_error)
{
    die("Not connected: " . $conn->connect_error);
}

$email =$_POST['Email'];
$paswd =$_POST['pwd'];

$sql ="SELECT * FROM account WHERE Email ='$email'";
$results = $conn->query($sql);

if($results && $results->num_rows == 1){
    $rows = $results->fetch_assoc(); //fetch_assoc function fetches a results row as an associative array (w3schools)
    
    if(password_verify($paswd,$rows['pass']))
    {
        $_SESSION['Email'] =$email;
        echo'<div class ="container mt-5"><div class ="log log-sucess" role="log"> Login Sucessful!</div>';

    }
    else{
        echo'<div class ="container mt-5"><div class ="log log-danger" role="log"> Incorrect!</div>';
    }
}
else{
    echo'<div class ="container mt-5"><div class="log log-danger" role="log">User not found</div></div>';
}

$conn->close();

?>