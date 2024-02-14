<?php


function testInput($data) // to test the input
{
    $data =trim($data); // removes white space and other characters
    $data = stripslashes($data); // to remove backlashes
    $data =htmlspecialchars($data);// converts predefined characters (<>)
    return $data;
}
$name ="";
$surname ="";
$email="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = testInput($_POST["Fname"]);
    $surname = testInput($_POST["Lname"]);
    $email = testInput($_POST["email"]);
   // $name = testInput($_POST["Fname"]);
}
//output
echo "Your name: .$name <br>";
echo "Your surname: .$surname <br>";
echo "Your email: .$email <br>";
//form validation

$name_err="";
$surname_err="";
$email_err="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //validating first name
    if(empty($_POST["Fname"]))
    {
        $name_err="Name is required";
    }
    else{
        $name = testInput($_POST["Fname"]);
        if(!preg_match("/^[a-zA-Z-' ]*$//",$name))
        {
            $name_err ="Only letters and white space allowed";
        }
    }
//validating last name
    if(empty($_POST["Lname"]))
    {
        $surname_err="Last Name is required";
    }
    else{
        $surname = testInput($_POST["Lname"]);
        if(!preg_match("/^[a-zA-Z-' ]*$//",$surname))
        {
            $surname_err ="Only letter and whitespace allowed";
        }
    }
//validating email
    if(empty($_POST["email"]))
    {
        $email_err="Email is required S";
    }
    else{
        $email = testInput($_POST["email"]);

        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $email_err="Invalid email";
        }
    }


    //date and time functions

    echo "Registration date " . date("Y/m/d - l") ."<br>";
    echo "Time registast: ". date("h:i:sa") ."<br>";

    //for timezone
    //date_default_timezone_set("America/New_york);
    //strtotime() 
    $d = strtotime("11:17am february 14 2023");
    echo"Todays date is " . date("Y/m/d h:i:sa",$d) ;
echo "<br> <br>";
 //file handling
 // read file  function
 echo readfile("file1.txt");
 echo "<br> <br>";
 $myfile = fopen("file1.txt","r") or die("unable to open a file!");
 echo fread($myfile,filesize("file1.txt"));
 fclose($myfile);

 //  open file  function
$my_file = fopen("testFile.txt","w") or die("unable to open a file");
//writing 
$my_name ="Nhlalala Mthombeni\n";
fwrite($my_file,$my_name);
$my_name ="CEO\n";
fwrite($my_file,$my_name);
fclose($my_file);

}




























/*defining variable(for error) to empty values

$FnameErr ="";
$LnameErr="";
$emailErr="";
$Fname="";
$Lname="";
$Email="";

    /*function test1()
    {
        
    }
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
       // $Fname = test( $Fname=htmlspecialchars($_POST["Fname"]));//?????? there's error message ?????
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
echo $Fname;
echo "<br>";

echo $Lname;
echo "<br>";

echo $Email;*/


//$conn->close();
?>



