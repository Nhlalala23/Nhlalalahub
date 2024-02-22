<?php

//checking if the form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST"){
 //checking if the sername and password  are correct
    $username =$_POST['Fname'];
    $password = $_POST['Password'];

    

    if($_POST['Fname']== $username && $_POST['password'] ==$password)
    {
        //setting cookies
        setcookie("logged_in", true,time(),+(86400 * 30),"/");
        header("Location : mywebpage");
        exit();
    }
    else{
        echo"Invalid username or password";
    }

}
?>


<?php

/*/creating cookies
$cookie_name ="user";
$cookie_value ="lala";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
    <body>
<?php
    if(!isset($_COOKIE[$cookie_name])){
        echo" cookie '" . $cookie_name . "' is not set! <br>";
    }
    else{
        echo"cookie '" .  $cookie_name . "' is set! <br>";
        echo" value is:  " . $_COOKIE[$cookie_name] ."<br>";
    }

    //checking if cookies are enabled

    if(count($_COOKIE)>0){
        echo"Cookies are enabled";
    }
    else{
        echo"cookies are disabled";
    }
    ?>
</body>
</html>*/
