<!DOCTYPE html>
<html>
<body>
    <?php
    //CONSTANTS using define
     define("GREETINGS","My name is Nhlalala",true);
    echo GREETINGS;
    
    // another constant 
    const name ="Nhlalala";
    echo"<br\n>";
    echo "Hello my name is ".name;

    // functions
    function finalMarks($mark1,$mark2)
    {
        $finMark;
        return $finMark = ($mark1 + $mark2) /2; 
    }
    function results()
    {
        

    }
    echo"<br\n>";
    //calling finalMarks function
    $m1 =70;
    $m2 =90;
   echo" your final mark is ".finalMarks($m1,$m2);
    ?>
    </body>
    </html>;