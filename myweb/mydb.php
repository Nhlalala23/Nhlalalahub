<?php



$servername ="localhost";
$username ="root";
$password="";
//$database="stokveldb";

//connecting 
$conn = new mysqli($servername,$username,$password);

//checking if connected

if($conn->connect_error)
{
    die("Connection error: $conn->connect_error");
}
 echo "Connected <br\n>";

 //CREATING A TABLE

 $sql = "CREATE DATABASE mystockveldb";
 if($conn->query($sql)===TRUE){
    echo"Database created ";
 }
 /*else{
    echo"error creating database ";
 }*/

 //selecting a database

$conn->select_db("mystockveldb");

//creating a tables

$sql_table1 = "CREATE TABLE member(
    memb_id int(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Fname VARCHAR(50) NOT NULL,
    Lname VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    home_addr VARCHAR(50)
)";
if($conn->query($sql_table1)===TRUE)
{
    echo"Table sucessfully created";
}
else{
    echo "table not created";
}

$sql_table2 ="CREATE TABLE IF NOT EXISTS account(
    acc_Id i int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(50),
    password1 VARCHAR(250),
    memb_id int(6) FOREIGN KEY
)";
if($conn->query($sql_table2)===TRUE)
{
    echo"Table sucessfully created";
}
else{
    echo "table not created";
}


$sql_table3 ="CREATE TABLE IF NOT EXISTS contribution(
    contr_Id int (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    amount float(50),
    date_contr date
)";
if($conn->query($sql_table3)===TRUE)
{
    echo"Table sucessfully created";
}
else{
    echo "table not created";
}

//checking if table is created suceffully
/*if($conn->query($sql_table)===TRUE)
{
    echo"Table sucessfully created";
}
else{
    echo "table not created";
}*/
 $conn->close();




?>
