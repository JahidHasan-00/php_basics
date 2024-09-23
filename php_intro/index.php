
<?php

use function PHPSTORM_META\type;

    $food = 'Pizza';
    $Food = 'Burger';
    // echo"I love" . $food . "<br>";
    // echo"I love" . $Food . "<br>";
    $x = 20;
    $y = 40;
    $burger_price = 150;
    $pizza_price = 200;
    $total_prices = $burger_price + $pizza_price;
    
    // echo $total_prizes . '<br>';
    // echo $y - $x . '<br>';
    // echo $y * $x . '<br>';
    // echo $y / $x . '<br>';
    // echo $y % $x . '<br>';

    /* PHP Data Type:
    #Check Variable Data Type using var_dump()
    */

    $number = 10; // int(intiger) data type
    $name = 'jahid'; // String data type
    $_number = 10.5; // float data type
    $islam = true; // boolean data type
    $zero = null; // null data type
    $color; //undefined data type
    $fruits = array('Apple','Pine-apple','Ice-apple','Banana');
    
    echo var_dump($fruits) . '<br>';
    echo var_dump($islam) . '<br>';
    echo var_dump($zero) . '<br>';
    echo var_dump($color) . '<br>';
    echo var_dump($total_prices) . '<br>';
    echo var_dump($food) . '<br>';
    echo var_dump($Food) . '<br>';

    echo phpversion() . '<br>';

    $color = 'red';
    echo 'my car is ' . $color . '<br>';
    echo 'my car is ' . $COLOR . '<br>';
    echo 'my car is ' . $coLor . '<br>';

    $txt = 'W3School.com';
    echo "I Love PHP $txt";

?>