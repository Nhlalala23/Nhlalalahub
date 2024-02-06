<?php

//defining variable(for error) to empty values

$FnameErr ="";
$LnameErr="";
$emailErr="";

//form handling
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //htmlspecialchars --covents predefined characters to hmtl entities
    //"--to avoid injecting code to the form or avoid hacking "
    
    if(empty($_POST["Fname"])) // check if the field is empty
    {
        $FnameErr ="Name is required";
    }
    else{
        $FName = test($_POST["Fname"]);
        if(!preg_match("/^[a-zA-Z-' ]*$",$FName)) //preg_match searches for a string pattern
        {
            $FnameErr = "Only letters and space allowed";
        }
        
    }
    $FName=htmlspecialchars($_POST["Fname"]);
  
    

    $LName= htmlspecialchars($_POST["Lname"]);
    $Email=htmlspecialchars($_POST["email"]);


}
  

 
echo "Data submitted <br\n> <br\n>";
echo $FName;
echo "<br>";

echo $LName;
echo "<br>";

echo $Email;


//$conn->close();
?>



