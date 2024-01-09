<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
   <?php
   $x=20;
   $y=&$x;
   $x=15;
   $z=5;
   $name ="Nhlalala"; 
   echo "Hello hi ".$name;
   echo"<br><n></n>welcome to my php ";
    echo "<br\n the the of x is $x";
    echo"<br\n y is: $y";

    function myfunction(){
        $n;
        global $y ,$z;
        $n = $y + $z; 
        echo"<br\n variable n is: $n";

    }
    //static
    myfunction();
    function theFunction()
    {
        static $x=0;
        echo $x;
        $x++;
    }
    echo"<br\n";
    theFunction();
    echo"<br\n";
    theFunction();
    echo"<br\n";
    theFunction();
   


   ?>
</body>
</html>