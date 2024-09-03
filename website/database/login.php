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

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
}

//prepare and bind
$stmt = $conn->prepare("SELECT password FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);

    //execute the statement
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            echo "Login successful! Redirecting to homepage...";
            header("Location: ../index.html");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No account found with that email.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    echo " Please fill in both email and password fields.";

?>





?>