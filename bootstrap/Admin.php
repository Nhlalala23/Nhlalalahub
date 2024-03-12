<?php
//approves clients

$servername = "localhost";
$username = "root";
$password = "";
$database = "M_Beauty";

//create connection
$conn = new mysqli($servername, $username, $password, $database);

// check if connected

if($conn->connect_error){
    die("not connected" .$conn->connect_error);
}
//echo"connected <br>";

if( $_SERVER['REQUEST_METHOD'] === 'POST') // checking if the form is submitted
{
    $name = $_POST['Name'];
    $email = $_POST['Email'];

    //inserting form registration to database with pending status
   $status =$conn->prepare("INSERT INTO clients(name,email,status) VALUES(?,?,'pending')");
    $status->bind_param("ss",$name,$email);

if($status->execute())
{
    //notifying admin 

    echo"Client regestration submitted";
}
else{
    echo"Error: " .$status->error;
}
$status->close();
   
   
}


//Admin approval process
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $clientId = $_GET['id'];

    //updating status based on admin action
    if($action === 'approved'){
        $update = $conn->prepare("UPDATE clients SET status ='approved' WHERE id= ?");

    }
    elseif($action ==='reject'){
        $update = $conn->prepare("UPDATE clients SET status ='rejected' WHERE id =?");
    }


$update->bind_param("i", $clientId);

if ($update->execute()) {
    if ($update->affected_rows > 0) {
        // Notify client about the approval/rejection
        echo "Client registration $action.";
    } else {
        echo "No client found with ID $clientId.";
    }
}
 else {
    echo "Error: " . $update->error;
}

$update->close();
}

// Close connection
$conn->close();
?>