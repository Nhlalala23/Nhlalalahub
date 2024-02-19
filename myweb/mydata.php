<?php

$servername ="localhost";
$username="root";
$password ="";
$database ="webBd";

//connection
$conn =new mysqli($servername,$username,$password,$database);

//checking if connected
if($conn->connect_error)
{
    die("Not connected: " .$conn->connect_error ."<br>");
}

// creating tables
$sql1 ="CREATE TABLE member (
    meb_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    home_address VARCHAR(250))";
    
    //checking if thhe table is connected

    if($conn->query($sql1)===TRUE)
    {
        echo"Table created <br>";
    }
    else{
        echo"Not connected: " . $conn->error ."<br>";
    }
    

   $sql2 ="CREATE TABLE Account(
    acc_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30)NOT NULL,
    Lname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(250),
    FOREIGN KEY(meb_id) REFERENCES member(meb_id)
   )";

      if($conn->query($sql2)===TRUE)
      {
          echo"Table created <br>";
      }
      else{
          echo"Not created: " . $conn->error ."<br>";
      }

      $sql3 =" CREATE TABLE contribution(
        contr_id  INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        amount int (100),
        contr_date date)
      ";

if($conn->query($sql3)===TRUE)
      {
          echo"Table created <br>";
      }
      else{
          echo"Not created: " . $conn->error ."<br>";
      }

      $sql4 ="CREATE TABLE memb_contr(
        contr_id INT,
        meb_id ,
        PRIMARY KEY (contr_id,meb_id)
        FOREIGN KEY(contr_id) REFERENCES contribution( contr_id)
        FOREIGN KEY(meb_id) REFERENCES member(meb_id)

        )
        ";
if($conn->query($sql4)===TRUE)
{
    echo"Table created <br>";
}
else{
    echo"Not created: " . $conn->error ."<br>";
}

?>