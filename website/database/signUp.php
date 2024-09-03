<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "store_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST["First_Name"]) && isset($_POST["Last_Name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $first_name = $_POST["First_Name"];
    $last_name = $_POST["Last_Name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

//hashed password
$hashed_password = password_hash($password,PASSWORD_BCRYPT);

//prepare abd bind
$stmt = $conn->prepare("INSERT INTO user(first_name,last_name,email,password) VALUES(?,?,?,?)");
$stmt->bind_param("ssss",$first_name,$last_name,$email,$hashed_password);

//EXECUTE THE STATEMENT
if($stmt->execute()){
    echo"New record created sucessfully";

    //redirect to homepage
    header("Location:../index.html");
    exit();
}
else{
    echo "Error: . $stmt->error";
}

//close the statement
$stmt->close();
$conn->close();
} /*else{
    echo"please fill all the fields.";
}*/
?>
