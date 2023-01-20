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
     $name4 = 'nima';
     $name6 = "it's another one";
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
    
    echo strrev('I love to eat pizza') . '<br>';
    
    /* 4. str_replace() function replaces some 
    characters with some other characters in a string.  */

    echo str_replace("world", "Dolly", "Hello world!");
    
    // echo str_shuffle('I love to eat pizza') . '<br>';
 


    
    // The pi() function returns the value of PI:

    echo pi() . '<br>'; // returns 3.1415926535898

    define('a', 19) . '<br>';
    echo(a) . '<br>';
    echo(min(0, 150, 30, 20, -8, -200)) . '<br>';  // returns -200
    echo(max(0, 150, 30, 20, -8, -200)) . '<br>';  // returns 150

    // The abs() function returns the absolute (positive) value of a number 

    echo(abs(-5)) . '<br>';  // returns 5

    // The sqrt() function returns the square root of a number 

    echo(sqrt(64));  // returns 8

    // The round() function rounds a floating-point number to its nearest integer 

    echo(round(0.60));  // returns 1
    echo(round(0.49));  // returns 0 

    // The rand() function generates a random number 

    echo(rand(10, 100));







    

    // How to define a constant on PHP

    define('A', '17');
    echo(A);
    // How to define a array in constant variable

    define('Laptop', [
        'Lenovo',
        'Asus',
        'Apple',
    ]);

    echo(Laptop[0]);

    // The rand() function generates a random number


    // var_dump(Laptop)






    # Number

    // 1. Check if the type of a variable is integer 

        $x = 5985;
        var_dump(is_int($x)); // returns boolean true

    // 2. Check if the type of a variable is float 

        $x = 10.365;
        var_dump(is_float($x)); // returns boolean true

    // The pi() function returns the value of PI 

        echo(pi()) .'<br>'; // returns 3.1415926535898

   /* The min() and max() functions can be used to find
     the lowest or highest value in a list of arguments  */

    echo(min(0, 1, 20, -8, -200));  // returns -200
    echo(max(0, 150, 30, 20, -8, -200)) . '<br>';  // returns 150

    // The absolute (positive) value of a number 

    echo(abs(-6));  // returns 6

    // The sqrt() function returns the square root of a number

    echo(sqrt(64));  // returns 8

    // he round() function rounds a floating-point number to its nearest integer 

    echo(round(5.90)); // returns 6
    // or
    echo(round(5.20)) ; // returns 5

   // The rand() function generates a random number 
   echo(rand(10, 100));


   $t = date("H");

if ($t < "20") {
  echo "Have a good day!" . '<br>';
} else {
  echo "Have a good night!" . '<br>';
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!" . '<br>';
    break;
  case "blue":
    echo "Your favorite color is blue!" . '<br>';
    break;
  case "green":
    echo "Your favorite color is green!" . '<br>';
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!" . '<br>';
}
      
$t = date("H");

if ($t < "20") {
  echo "Have a good day!" .'<br>';
} else {
  echo "Have a good night!" .'<br>';
}

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/* --------------- Operators ---------------- */
echo 10 + 5 .'<br>'; // 
echo 10 - 5 .'<br>'; // 
echo 10 * 5 .'<br>'; // 
echo 10 / 5 .'<br>'; // 
echo 10 % 5 .'<br>'; // Modulus
$x = 2;
$y = 3;

/* --------- or ----------*/ 


/* ----------------- PHP Arithmetic Operators ---------------- */

$x  += $y; //$x = $x + $y; > Addition
$x  -= $y; //$x = $x - $y; > Subtraction
$x  *= $y; //$x = $x * $y; > Multiplication
$x  /= $y; //$x = $x / $y; > Division
$x  %= $y; //$x = $x % $y; > Division

/* --------------- PHP Comparison Operators ---------------- */


echo $x;

    ?>

</body>
</html>