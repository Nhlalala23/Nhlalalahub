<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php
   /* const static_pay = 'pay'; 
   echo static_pay;
   
      
   if(true)
    {
        
        define('static_pay','paid');
    }
    
       class Person
       {
        public $age;
        public $height;
        public $name;
        public function __construct($age,$height,$name)
        {
           $this->age=$age;
           $this->height=$height;
           $this->name =$name;

        }
        public function message()
        {
            return "My name is ".$this->name." and my gae is ".$this->age." and i am ".$this->height." ft tall";
        }
       }

       $myHuman = new Person(18,5.7,"Nhlalala"); 
       //returning values not displaying :(
        */
        
       echo strlen("<br\nhello world");//length
       
       echo str_word_count("<br\nhello world");//number of words
       echo strpos("<br\nhello Nhlalala","Nhlalala");// searching text
       echo strtoupper("<br\nNhlalala"); // uppercases
       echo strtolower("br\nNhlalala"); // lowercase
       $word =" hello Nhlalala ";
       echo str_replace(" Nhlalala","lala",$word);
       echo trim($word);

       $y = explode(" ",$word);
       print_r($y);

//slicing/ substring
    echo substr("<br\n>".$word,0,6);

    // Navigating the length
    echo substr("<br\n>".$word , 5,-3);
//escape characters
echo"<br\n";
    echo "The more you take , the more you leave behind.\"what am i?\"";
//numeric strings
        $n = 78;
        var_dump(is_numeric($n));
        $x = "59.85" + 100;
        var_dump(is_numeric($n));

        $z=10.9;
        $int_cast =(int)$z;
        echo $int_cast;
    ?>
</body>
</html>