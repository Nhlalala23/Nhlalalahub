<?php
//database

$servername ="localhost";
$username ="root";
$password ="";
$dababase ="myfirstdb";


//connection

$conn = new mysqli($servername,$username,$password,$dababase);

if($conn->connect_error)
{
    die("connection failed: ". $conn->connect_error);

}
echo "Connected";



// creating a table 
 $sql = "CREATE TABLE Account(
    acc_id INT(5) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 )";

 //CHECKING IF TABLE IS CREATED
 if($conn->query($sql)===TRUE)
 {
    echo "Table Account created sucessfully <br>";
 }
 else {
    echo "<br> table not created";
 }
 echo"<br>";
 
 //inserting data 
 /*$sql ="INSERT INTO Account(firstname,lastname,email)
 VALUES ('Nhlalala','Mthombeni','lala@gmail.com')";

$sql ="INSERT INTO Account(firstname,lastname,email)
 VALUES ('lala','Mthombeni','my@gmail.com')";

$sql ="INSERT INTO Account(firstname,lastname,email)
VALUES ('JJ','brown','jj@gmail.com')";

 if($conn->multi_query($sql)===TRUE) //multi_query is for multiple sql statements
 {
    $last_id =$conn->insert_id;
    echo"<br> added suceffully.<br> Last Id inserted is: $last_id";
 }
 else{
   echo"Error: <br>" .$conn->error;
 }*/

 //getting data from form
 if($_SERVER["REQUEST_METHOD"] =="POST")
 {
    /*$name = $_REQUEST['Fname'];
    $surname =$_REQUEST['Lname'];
    $email =$_REQUEST['email'];

    $sql = "INSERT INTO Account VALUES($name,
    $surname,$email)";*/
    $data =$_REQUEST['Fname'];
    $data2 =$_REQUEST['Lname'];
    $data3 =$_REQUEST['email'];
  if(empty($data))
  {
    echo"data is empty <br>";
  }
  else{
    echo"$data <br>";
  }
  if(empty($data2))
  {
    echo"data is empty <br>";
  }
  else{
    echo"$data2 <br>";
  }
  if(empty($data3))
  {
    echo"data is empty <br>";
  }
  else{
    echo"$data3 <br>";
  }
 }

 
 

 //selecting data fromsql database

 /*$sql ="SELECT acc_id,firstname,email
  * FROM Account";
 $results = $conn->query($sql);

if($results-> num_rows>0)
{
    while($row =$results->fetch_assoc())
    {
        echo "acc_id" . $row["acc_id"] ." - Name: " . $row["firsname"] . " " .$row["email"]. "<br>";
    }
    
}
else{
       echo "no results"; 
}*/

 $conn->close();

?>