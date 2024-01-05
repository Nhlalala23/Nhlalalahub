<?php
$clockInTime="";

if(isset($_POST['clock_in'])){
    //user clocked in
    $username =$_POST['username'];
    $password = $_POST['password'];
    if($username === $validUsername && $password === $validPassword)
    {
        //checking for valid log-in details
        $_SESSION['clock_in'] = true;
        header("Location: pj2.php");
        exit();
    }
    else{
        //for invalid credentials
        header("Location: pj1.html?error=1");
        exit();
    }
    //$clockInTime = date("Y-m-d H:i:s"); //current time

}
elseif (isset($_POST['clock_out'])){
    //worker clocked out
    $clockOutTime =date("Y-m-d H:i:s");

}
header("Location: pj.html");
exit();