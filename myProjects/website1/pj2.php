<?php
$clockInTime="";

if(isset($_POST['clock_in'])){
    $clockInTime = date("Y-m-d H:i:s"); //current time
    //user clocked in
 
   

}
elseif (isset($_POST['clock_out'])){
    //worker clocked out
    $clockOutTime =date("Y-m-d H:i:s");

}
header("Location: pj.html");

exit();
if(isset($_POST['login']))
{
       $username =$_POST['username'];
    $password = $_POST['password'];
    if($username === $validUsername && $password === $validPassword)
    {
        //checking for valid log-in details
        $_SESSION['logged_in'] = true;
        header("Location: pj2.php");
        exit();
    }
    else{
        //for invalid credentials
        header("Location: pj1.html?error=1");
        exit();
    }
}
if(isset($_POST['register']))
{
    $servername = "localhost/Nhlalalahub/";
    $username = "your_username";
    $password ="your_password";
    $dbname ="your_database";

    //connection
    $connection = new mysqli($servername,$username,$password,$dbname);
    if($connection->connect_error)
    {
        die("Connection failed: ". $connection->connect_error);
    }
    $username = sanitize($_POST['name']);
    $password = password_hash($_POST['password' ],PASSWORD_DEFAULT);

    //INSERT INTO DATABASE
    $sql ="INSERT INTO users(name,password) Values('$username','$password')";

    if ($connection->query($sql)=== TRUE)
    {
        echo "Registration sucessful!";

    }
    else { echo"Error: " . $sql . "<br>" . $connection->error;
        $conn->close();}
}
?>
