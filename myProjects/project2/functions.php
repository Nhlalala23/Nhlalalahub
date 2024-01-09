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
    echo "<br\n";
    function addNums($a,$b)
    {
        return $a + $b;

    }
    $results = addNums(5,2);
    echo "The answer is: $results";
    echo "<br\n";
   
    function nums($numbs)
    {
        for($i =1;$i<=$numbs;$i++)
        {
            echo $i." ";
        }
    }
    nums(20);
    

    /*function myNums(){
       $numbers =1;
       $sum=0;
        do
     {
        if($numbers %2 === 20)
        {
            $sum=$numbers++;
        }
        else{
            $sum=0;
        }
        
     }while($numbers <=20);

     echo "Sum = $numbers";   
    return $sum;
    
    }
        :( :)
    myNums();*/
     
    ?>
</body>
</html>

