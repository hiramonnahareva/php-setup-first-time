<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 'hello php'; 

    // how to write veriable in php

    $food = 'pizza';
    echo 'I love to eat ' . $food . '<br>'; 
    
    // How to write var_dump function 
    

    // Note: var_dump() function dumps information holds type and value of the variable(s).

    // differents between echo & print 
    /* 
    1. echo is marginally faster than print
    2. echo has no return value while print has a return value of 1
     */

     $river = 'padma';
     $rivers = print $river;
     echo($rivers);
     $name = 'elma';
     $name1 = "it's me";
     var_dump ($name);
    //  
     $age = 20;
     $age = 18.2;

    // sum

    $a = 2;
    $b = 4;
    echo $a + $b . '<br>';

    // or

    $sum = ($a + $b) . '<br>';

    echo $sum;

     // multiple

     $a = 2;
     $b = 4;
     echo $a - $b . '<br>';
 
     // or
 
     $sum = ($a + $b) . '<br>';
 
     echo $sum;

    //   How to wirte object 
     echo(min(0, 15, 30, 50, 50, 85, 85, 17));

     class phone {
        var $model;
        function phoneModel ($number){
            global $model;
            $model = $number;
            echo "this is $model <br>";
        }
    }
    $apple = new phone;
    $apple-> phoneModel('iphone 13');

    //1. To Return the length of the string 

    echo strlen('I love to eat pizza') . '<br>';

    //2. Way to Count the number of word in the string

    echo str_word_count('I love to eat pizza') . '<br>';

    //3. strrev() function reverses a string.
    
    echo strrev('I love to eat pizza');
    
    //4. str_replace() function replaces some characters with some other characters in a string.

    echo str_replace("world", "Dolly", "Hello world!");


    
    // echo str_shuffle('I love to eat pizza') . '<br>';


    // The pi() function returns the value of PI:

    echo pi();

    ?>

</body>
</html>