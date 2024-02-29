<?php
session_start();

//checking if the session variables are set
if(isset($_SESSION["Fname"]) && isset($_SESSION["Lname"]) && isset($_SESSION["email"]) && isset($_SESSION["paswd"])){
    //retieve variables
    $name = $_SESSION["Fname"];
    $surname = $_SESSION["Lname"];
    $email = $_SESSION["email"];
    $password = $_SESSION["paswd"];

    // confirmation message
    echo"You have created your account, $name";
    echo" Thank you!";

    // clear the session variables

    session_unset();
    session_destroy();
}

else{
    // if session variables are not set.

    echo" Account not created , Please try again.";
}
?>