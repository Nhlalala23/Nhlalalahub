<?php
//to acess variables
session_start();

//checking if the user is logged in
if(!isset($_SESSION['memb_id'])){
    header("Location: login.php");
    exit();
}

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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta name ="viewpoint" content ="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>Welcome , <?php echo $_SESSION['email'];?></h1>
    <p>This is your personalised dashboard </p>
</body>
</html>