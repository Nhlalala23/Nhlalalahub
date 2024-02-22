<?php

//creating cookies
$cookie_name ="user";
$cookie_value ="lala";
setcookie($cookie_name,$cookie_value,time() + (86400 *30),"/"); // 86400 = 1day

?>

<html>
    <body>
<?php
    if(!isset($_COOKIE[$cookie_name])){
        echo" cookie '" . $cookie_name . "' is not set! <br>";
    }
    else{
        echo"cookie '" .  $cookie_name . "' is set! <br>";
        echo" value is: " . $_COOKIE[$cookie_value];
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
</html>