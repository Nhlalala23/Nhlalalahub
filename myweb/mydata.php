<?php

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

// SQL queries to create tables with foreign keys
$sql_members="
CREATE TABLE IF NOT EXISTS members (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    home_address VARCHAR(250)
)";

// Execute the members table creation query
if ($conn->query($sql_members) === TRUE) {
    echo "Members table created successfully";
} else {
    echo "Error creating members table: " . $conn->error;
}

$sql_accounts = "
CREATE TABLE IF NOT EXISTS accounts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    acc_number VARCHAR(30) NOT NULL,
    balance DECIMAL(10,2) NOT NULL
)";

// Execute the accounts table creation query
if ($conn->query($sql_accounts) === TRUE) {
    echo "Accounts table created successfully";
} else {
    echo "Error creating accounts table: " . $conn->error;
}

// Add member_id column to accounts table
$sql_add_member_id = "ALTER TABLE accounts ADD COLUMN member_id INT(6)";
if ($conn->query($sql_add_member_id) === TRUE) {
    echo "member_id column added to accounts table successfully";
} else {
    echo "Error adding member_id column to accounts table: " . $conn->error;
}

// Add foreign key constraint
$sql_add_fk_constraint = "ALTER TABLE accounts ADD CONSTRAINT fk_member_id FOREIGN KEY (member_id) REFERENCES members(id)";
if ($conn->query($sql_add_fk_constraint) === TRUE) {
    echo "Foreign key constraint added successfully";
} else {
    echo "Error adding foreign key constraint: " . $conn->error;
}
// Close connection
$conn->close();

?>