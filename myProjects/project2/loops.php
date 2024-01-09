<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=1;
$y=0;
    while($x<=10)
    {
        echo "The number is :$x<br>";
        $x++;
    }
    echo"<br\n";

    while($y <= 100)
    {
        echo $y;
        echo"<br\n";
        $y+=10; 
    }
    echo"<br\n";
    //do while loop
    do
    {
        echo "aswer is $x";
    }while($x<5);
    echo"<br\n";

    echo"<br\n";
    //for loop
    //$answer;
    for($x=0;$x<=10;$x++)
    {
        //$answer =$x;
        echo"answer =$x <br\n>";
    }

    $colors =array("yellow","pink","orange","green");

    foreach($colors as $value)
    {
        echo "$value <br\n>";
    }
    $age =array("lala"=>"23","Pretty"=>"27");
    foreach($age as $x=> $val)
    {
        echo"$x = $val<br>";
    }

    $num=1;
    while($num<11)
    {
        echo"Enter a number:";
        $num = readline();
        echo"<br\n";
        if ($num >76)
        {
            echo"you lose!<br\n";

        }
        else{
            echo"way to go!<br\n";
            $num++;
        }
    }

    
    
    ?>
</body>
</html>