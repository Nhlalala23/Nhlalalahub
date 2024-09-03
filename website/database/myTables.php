<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store_db";

//connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check if connected
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create the customers table
/*$sql1 = "CREATE TABLE customers (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(20),
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";*/

// Create the contact table
$sql2 = "CREATE TABLE contact (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$sql3="CREATE TABLE user (
   user_id INT AUTO_INCREMENT PRIMARY KEY,
   first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
) ";



// Execute the table creation queries
/*if ($conn->query($sql1) === TRUE) {
    echo "Table 'customers' created successfully.";
} else {
    echo "Error creating table 'customers': " . $conn->error;
}*/

if ($conn->query($sql2) === TRUE) {
    echo "Table 'contact' created successfully.";
} else {
    echo "Error creating table 'contact': " . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
    echo "Table 'account' created successfully.";
} else {
    echo "Error creating table 'account': " . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
    echo "Table 'user' created successfully.";
} else {
    echo "Error creating table 'user': " . $conn->error;
}



$conn->close();
?>