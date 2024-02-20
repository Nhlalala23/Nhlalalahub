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
$sql ="CREATE TABLE member (
    meb_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    home_address VARCHAR(250);
    
    CREATE TABLE Account(
    acc_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30)NOT NULL,
    Lname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(250),
    memb_id INT,
    FOREIGN KEY(memb_id) REFERENCES member(meb_id);

    CREATE TABLE memb_contr(
        contr_id INT,
        memb_id INT ,
        PRIMARY KEY (contr_id,meb_id),
        FOREIGN KEY(contr_id) REFERENCES contribution( contr_id),
        FOREIGN KEY(memb_id) REFERENCES member(meb_id);

    CREATE TABLE IF NOT EXISTS Transactions(
        trans_id INT(6) AUTO_INCREMENT PRIMARY KEY,
        amount int,
        trans_date DATE,
        status_trans VARCHAR(50);

        CREATE TABLE IF NOT EXISTS Memb_Trans (
        memb_id INT(6),
        trans_id INT(6),
        PRIMARY KEY (memb_id, trans_id),
        FOREIGN KEY(memb_id) REFERENCES member(meb_id),
        FOREIGN KEY(trans_id) REFERENCES Transactions( trans_id)
    )";
    
    //checking if the table is connected

    if($conn->multi_query($sql)===TRUE)
    {
        echo"Table created <br>";
    }
    else{
        echo"Not connected: " . $conn->error ."<br>";
    }
    

  /* $sql2 ="CREATE TABLE Account(
    acc_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30)NOT NULL,
    Lname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(250),
    memb_id INT,
    FOREIGN KEY(memb_id) REFERENCES member(meb_id)
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
        contr_date date)";

if($conn->query($sql3)===TRUE)
      {
          echo"Table created <br>";
      }
      else{
          echo"Not created: " . $conn->error ."<br>";
      }

      $sql4 ="CREATE TABLE memb_contr(
        contr_id INT,
        memb_id INT ,
        PRIMARY KEY (contr_id,meb_id),
        FOREIGN KEY(contr_id) REFERENCES contribution( contr_id),
        FOREIGN KEY(memb_id) REFERENCES member(meb_id)
 )";

if($conn->query($sql4)===TRUE)
{
    echo"Table created <br>";
}
else{
    echo"Not created: " . $conn->error ."<br>";
}

$sql5 ="CREATE TABLE IF NOT EXISTS Transactions(
    trans_id INT(6) AUTO_INCREMENT PRIMARY KEY,
    amount int,
    trans_date DATE,
    status_trans VARCHAR(50)
    )";

    if($conn->query($sql5)===TRUE)
    {
        echo"Table created <br>";
    }
    else{
        echo"Not created: " . $conn->error ."<br>";
    }

    $sql6 =" CREATE TABLE IF NOT EXISTS Memb_Trans (
        memb_id INT(6),
        trans_id INT(6),
        PRIMARY KEY (memb_id, trans_id),
        FOREIGN KEY(memb_id) REFERENCES member(meb_id),
        FOREIGN KEY(trans_id) REFERENCES Transactions( trans_id)
    )";

if($conn->query($sql6)===TRUE)
{
    echo"Table created <br>";
}
else{
    echo"Not created: " . $conn->error ."<br>";
}*/

?>