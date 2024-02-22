<?php
session_start();

//check if the form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //check if the variables are correct

    $username =$_POST['Fname'];
    $Lastname =$_POST['Lname'];
    $email =$_POST['email'];
   //$password= $_POST['password'];

   if( $username =$_POST['Fname'])
   {
    $_SESSION["logged_in"] =true;
   }
   else{
    header("Location: index.php?error=1");
    exit();
   }
}

?>