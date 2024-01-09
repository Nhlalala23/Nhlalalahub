<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
     //cCONSTANTS
     //define(name,value,case-insesitive);
     define("GREETINGS","Welcome to my code,br\n");
     echo GREETINGS;
     //define("GREETINGS","Welcome to my code",true);
     //echo greetings;

     const NAME ="Lala";
     echo NAME;
    echo"<br\n>";
     //constant arrays
     define("names",["faith","Precious","chris"]);
     echo names[2];

     /*define("WEATHER ","it is changing all the time!<br\n");
   
     function myweather()
     { 
        echo WEATHER;
     }
     myweather();*/

     echo"<br\n";
     //IF STATEMRENTS
     $mark1=90;
    $mark2 = 20;

     if($mark1 > 50)
     {
        echo"passed";
     }
     else
     {
        echo "failed<br\n";
     }
     if($mark2 > 50)
     {
        echo"passed";
     }
     else
     {
        echo "failed";
     }
     echo"<br\n";
     if($mark1 == 90)
     {
        echo"weldone";
     }
    echo"<br\n";
    
    if($mark1 > $mark2)
    {
        echo"true";
    }
    echo"<br\n";
    if ($mark1 >= 50 && $mark2 >=50)
    {
        echo"both true";
    }
   echo"<br\n";
    //Switch statement
    $cars = "BMW";
switch($cars)
{
    case "BMW":
        echo"First choice";
        break;
        case "VW":
            echo"send choice";
            beak;
            case "Porche":
                echo"Third choice";
                break;
                default:
                echo"your car choices are BMW,VW,Porsce";
}
     ?>
</body>
</html>