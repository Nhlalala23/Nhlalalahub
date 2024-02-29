<?php
//starting the session

session_start();

//set variables

$_SESSION["username"]="lala";
$_SESSION["email"]="lala@gmail.com";

?>

<!DOCTYPE html>
<html>
<head>
    <title>my page</title>
</head>
<body>
    <h2>my page</h2>
    <p>Session is set.</p>
    <p><a href="profile.php">check the profile.</a></p>
</body>
<body