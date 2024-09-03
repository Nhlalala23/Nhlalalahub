<?php

//create a database

$servername ="localhost";
$username="root";
$password ="";

//connecting to mysql
$conn =new mysqli($servername,$username,$password);

//checking if connected
if($conn->connect_error)
{
    die("Not connected: " .$conn->connect_error);
}

//creating a database
$sql ="CREATE DATABASE Store_db";

if($conn->query($sql) === TRUE){
    echo"Database created successfully";
}
else
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "jewelry_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Perform validations
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If there are no errors, proceed with form processing
    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email, message) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssss", $name, $phone, $email, $message);

            if ($stmt->execute()) {
                echo "<h1>Thank You!</h1>";
                echo "<p>Name: $name</p>";
                echo "<p>Phone: $phone</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Message: $message</p>";
            } else {
                echo "<h1>Error</h1>";
                echo "<p>There was a problem saving your information. Please try again later.</p>";
            }

            $stmt->close();
        } else {
            echo "<h1>Error</h1>";
            echo "<p>Failed to prepare the SQL statement. Please try again later.</p>";
        }
    } else {
        echo "<h1>Error</h1>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
} else {
    header("Location: contacts.html");
    exit();
}

$conn->close();
?>
    echo "Error : " . $conn->connect_error;
}*/



$conn->close();
?>