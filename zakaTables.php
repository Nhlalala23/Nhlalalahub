<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ZAKA";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL queries to create tables with Primary keys
$sql_users="CREATE TABLE IF NOT EXISTS User (
    user_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    home_address VARCHAR(250),
    phone VARCHAR(10) 
)";

// Execute the members table creation query
if ($conn->query($sql_users) === TRUE) {
    echo "users table created successfully <br>";
} else {
    echo "Error creating members table: " . $conn->error ."<br>";
}

$sql_accounts = "CREATE TABLE IF NOT EXISTS accounts (
    acc_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    acc_TYPE VARCHAR(30) NOT NULL,
    balance decimal

)";
// adding a column(user_id ) from users table
$sql_add_userid= "ALTER TABLE accounts ADD COLUMN user_id INT(6)";
if ($conn->query($sql_add_userid) === TRUE) {
    echo "user_id column added to accounts table successfully <br>";
} else {
    echo "Error adding user_id column to accounts table: " . $conn->error ."<br>"; 
}

// Add foreign key constraint
$sql_add_fk_constraint = "ALTER TABLE accounts ADD CONSTRAINT user_id FOREIGN KEY (user_id) REFERENCES users(user_id)";
if ($conn->query($sql_add_fk_constraint) === TRUE) {
    echo "Foreign key constraint added successfully <br>";
} else {
    echo "<br>Error adding foreign key constraint: " . $conn->error ."<br>";
}

// Execute the accounts table creation query
if ($conn->query($sql_accounts) === TRUE) {
    echo "Accounts table created successfully <br>";
} else {
    echo "Error creating accounts table: " . $conn->error ."<br>";
}

//transaction table
$sql_Transation ="CREATE TABLE Transaction (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    trans_type VARCHAR(30) NOT NULL,
    amount float,  /*have to chheck the data type */
    trans_date DATE
)";
// adding a column(user_id ) from users table
$sql_add_userid= "ALTER TABLE Transaction ADD COLUMN user_id INT(6)";
if ($conn->query($sql_add_userid) === TRUE) {
    echo "user_id column added to accounts table successfully <br>";
} else {
    echo "Error adding user_id column to accounts table: " . $conn->error ."<br>"; 
}

// Add foreign key constraint
$sql_add_fk_constraint = "ALTER TABLE Transaction ADD CONSTRAINT user_id FOREIGN KEY (user_id) REFERENCES users(user_id)";
if ($conn->query($sql_add_fk_constraint) === TRUE) {
    echo "Foreign key constraint added successfully <br>";
} else {
    echo "<br>Error adding foreign key constraint: " . $conn->error ."<br>";
}


if ($conn->query($sql_Transation) === TRUE) {
    echo "Transaction table created successfully <br>";
} else {
    echo "Error creating Transaction table: " . $conn->error ."<br>";
}

$sql_Benefitiary ="CREATE TABLE Benefitiary (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ben_name VARCHAR(30) NOT NULL,
    accountNum Varchar(10) NOT NULL,  /*have to chheck the data type */
    trans_date DATE,
    bank_name VARCHAR(50) NOT NULL
)";
// adding a column(user_id ) from users table
$sql_add_userid= "ALTER TABLE Benefitiary ADD COLUMN user_id INT(6)";
if ($conn->query($sql_add_userid) === TRUE) {
    echo "user_id column added to Benefitiary table successfully <br>";
} else {
    echo "Error adding user_id column to Benefitiary table: " . $conn->error ."<br>"; 
}

// Add foreign key constraint
$sql_add_fk_constraint = "ALTER TABLE Benefitiary ADD CONSTRAINT user_id FOREIGN KEY (user_id) REFERENCES users(user_id)";
if ($conn->query($sql_add_fk_constraint) === TRUE) {
    echo "Foreign key constraint added successfully <br>";
} else {
    echo "<br>Error adding foreign key constraint: " . $conn->error ."<br>";
}

if ($conn->query($sql_Benefitiary) === TRUE) {
    echo "Benefitiatry table created successfully <br>";
} else {
    echo "Error creating accounts table: " . $conn->error ."<br>";
}

$sql_Authatication ="CREATE TABLE Authatication  (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    token VARCHAR(30) NOT NULL,
    expirydate DATE
)";
// adding a column(user_id ) from users table
$sql_add_userid= "ALTER TABLE Authatication ADD COLUMN user_id INT(6)";
if ($conn->query($sql_add_userid) === TRUE) {
    echo "user_id column added to Authatication table successfully <br>";
} else {
    echo "Error adding user_id column to Authatication table: " . $conn->error ."<br>"; 
}

// Add foreign key constraint
$sql_add_fk_constraint = "ALTER TABLE Authatication ADD CONSTRAINT user_id FOREIGN KEY (user_id) REFERENCES users(user_id)";
if ($conn->query($sql_add_fk_constraint) === TRUE) {
    echo "Foreign key constraint added successfully <br>";
} else {
    echo "<br>Error adding foreign key constraint: " . $conn->error ."<br>";
}


if ($conn->query($sql_Authatication) === TRUE) {
    echo "Authatication table created successfully <br>";
} else {
    echo "Error creating Authatication table: " . $conn->error ."<br>";
}

$sql_Device ="CREATE TABLE Device  (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Device_type VARCHAR(30),
    device_token VARCHAR(30),
    lastAcess VARCHAR(5)
)";
// adding a column(user_id ) from users table
$sql_add_userid= "ALTER TABLE Device ADD COLUMN user_id INT(6)";
if ($conn->query($sql_add_userid) === TRUE) {
    echo "user_id column added to Device table successfully <br>";
} else {
    echo "Error adding user_id column to Device table: " . $conn->error ."<br>"; 
}

// Add foreign key constraint
$sql_add_fk_constraint = "ALTER TABLE Device ADD CONSTRAINT user_id FOREIGN KEY (user_id) REFERENCES users(user_id)";
if ($conn->query($sql_add_fk_constraint) === TRUE) {
    echo "Foreign key constraint added successfully <br>";
} else {
    echo "<br>Error adding foreign key constraint: " . $conn->error ."<br>";
}

if ($conn->query($sql_Device) === TRUE) {
    echo "Device table created successfully <br>";
} else {
    echo "Error creating Device table: " . $conn->error ."<br>";
}

// Add member_id column to accounts table
/*$sql_add_member_id = "ALTER TABLE accounts ADD COLUMN member_id INT(6)";
if ($conn->query($sql_add_member_id) === TRUE) {
    echo "member_id column added to accounts table successfully <br>";
} else {
    echo "Error adding member_id column to accounts table: " . $conn->error ."<br>"; 
}

// Add foreign key constraint
$sql_add_fk_constraint = "ALTER TABLE accounts ADD CONSTRAINT fk_member_id FOREIGN KEY (member_id) REFERENCES members(id)";
if ($conn->query($sql_add_fk_constraint) === TRUE) {
    echo "Foreign key constraint added successfully <br>";
} else {
    echo "<br>Error adding foreign key constraint: " . $conn->error ."<br>";
}*/



// Close connection
$conn->close();
?>
