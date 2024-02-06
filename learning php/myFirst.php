<?php

//form handling
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //htmlspecialchars --covents predefined characters to hmtl entities
    //"--to avoid injecting code to the form or avoid hacking "
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



