<?php
session_start();

// checking if the form is submitted then store data into session variables
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_SESSION["Fname"] =$_POST["Name"];
    $_SESSION["Lname"] =$_POST["Surname"];
    $_SESSION["email"] =$_POST["Email"];
    $_SESSION["paswd"] =$_POST["password"];

    header("Location: confirm.php");
    exit();
}


?>