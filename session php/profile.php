<?php
//start the session

session_start();
//checking if the variables are valid
if(!isset($_SESSION["Fname"]) || !isset($_SESSION["password"]))
{
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>my profile</title>
</head>
<body>
  
   <p>Welcome <?php echo"$username";?> </p>
   <p><a href="login.php">Logout</a></p>
</body>
</html>