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
    
    //validating first name 
    if(empty($_POST["Fname"])) // check if the field is empty
    {
        $FnameErr ="Name is required";
    }
    else{
        $Fname = test( $Fname=htmlspecialchars($_POST["Fname"]));
        if(!preg_match("/^[a-zA-Z-' ]*$",$Fname)) //preg_match searches for a string pattern
        {
            $FnameErr = "Only letters and space allowed";
        }
        
    }

    //validating Lname
    if(empty($_POST["Lname"])) 
    {
        $LnameErr ="Last Name is required";
    }
    else{
        $Lname = test( $Lname=htmlspecialchars($_POST["Lname"]));
        if(!preg_match("/^[a-zA-Z-' ]*$",$Lname)) 
        {
            $LnameErr = "Only letters and space allowed";
        }
        
    }
   
   //validating email
   if(empty($_POST["Lname"])) 
   {
       $emailErr =" Email is  required";
   }
   else{
       $Email = test($Email = htmlspecialchars($_POST["email"]));
       if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
        $Email ="Invalid email";
       } 
       
       
   }
    

   // $LName= htmlspecialchars($_POST["Lname"]);
   // $Email=htmlspecialchars($_POST["email"]);


}
  

 
echo "Data submitted <br\n> <br\n>";
echo $FName;
echo "<br>";

echo $LName;
echo "<br>";

echo $Email;


//$conn->close();
?>



