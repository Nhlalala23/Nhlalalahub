<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*functon myFuction(){ echo "hello world"}
    #calling a finction
    myFunction();


    
    */

    function myFuction($colors)
    {
        echo "$colors <br\n";
    }
    myFuction("Blue<br\n");
    myFuction("Green");

   
    function myNums($numbers){
        $numbers =1;
        $sum=0;
        do
     {
        if($numbers %2 === 20)
        {
            $sum=$numbers++;
        }
        else{
            $sum=-1;
        }

     }while($numbers <=20);

     echo "Sum = $numbers";   
    
    
    }

    myNums("10");
     
    ?>
</body>
</html>

