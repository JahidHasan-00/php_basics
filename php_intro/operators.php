<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
</head>
<body>
    
    <?php 
    // Arithmetic Operators( +, -, *, /, %):
    echo 'Arithmetic Operator Outputs Part:' . '<br>';
    $x = 10;
    $y = 20;
    echo 'Sum of (X + Y) = ' . $x + $y . '<br>';
    echo 'Sum of (X - Y) = ' . $x - $y . '<br>';
    echo 'Sum of (X * Y) = ' . $x * $y . '<br>';
    echo 'Sum of (X / Y) = ' . $x / $y . '<br>';
    echo 'Sum of (X % Y) = ' . $x % $y . '<br><br>';

    // Assignment Operator( basic(=), x=y, x+=y, x-=y, x*=y, x/=y, x%=y):
    echo 'Assignment Operator Outputs Part: ' . '<br>';
    $a = 20;
    $b = 5;
    echo ($a += $b) . '<br>'; // Same as (X = X + Y)
    echo ($a -= $b) . '<br>'; // Same as (X = X - Y)
    echo ($a *= $b) . '<br>'; // Same as (X = X * Y)
    echo ($a /= $b) . '<br>'; // Same as (X = X / Y)
    echo ($a %= $b) . '<br>'; // Same as (X = X % Y)
    echo ($a = $b) . '<br>' . '<br>'; // Same as (X = Y)

    // Comparison Operator (==, ===, !=, <>, !==, >, <, >=, <=, <=>):
    echo 'Comparison Operator Outputs Part: ' . '<br>';
    var_dump ($a == $b); // true
    echo '<br>';
    var_dump (10 === '10'); // false
    echo '<br>';
    var_dump ($a != $b); // false
    echo '<br>';
    var_dump ($a <> $b); // false
    echo '<br>';
    var_dump (10 !== '10'); // true
    echo '<br>';
    var_dump (10 !== 10); // false
    echo '<br>';
    var_dump ($a > $b); // false
    echo '<br>';
    var_dump ($a < $b); // false
    echo '<br>';
    var_dump ($a <= $b); // true
    echo '<br>';
    var_dump ($a >= $b); // true
    echo '<br>';

    echo (5 <=> '6') . '<br>'; // return -1
    echo (5 <=> 5) . '<br>'; // return 0
    echo (6 <=> 5) . '<br>' . '<br>'; // return +1
    
    // PHP Increment / Decrement Operators:
    echo 'Increment or Decrement Outputs Part: ' . '<br>';
    echo $a;
    echo '<br>';
    echo ++$a; // Pre Increment
    echo '<br>';
    echo $b;
    echo '<br>';
    echo $b++; // Post Increment
    echo '<br>';
    echo $b;
    echo '<br>';
    echo --$b; // Pre Decrement
    echo '<br>';
    echo $b;
    echo '<br>';
    echo $a;
    echo '<br>';
    echo $a--; // Post Decrement
    echo '<br>';
    echo $a;
    echo '<br><br>';


    // PHP Logical Operators --> The PHP logical operators are used to combine conditional statements:
    echo 'Logical Operators Outputs Part: ' . '<br>';
    $x1 = 12;
    $y1 = null;
    if($x1 == 12 && is_null(null) ){ //And (&&) operator we can use (and)
        echo 'Both are true' . '<br>';
        $y1++;
    }
    else{
        echo 'Both are false' . '<br>';
    }

    // Or (|| / or) Operator:
    if($x1 == is_null($y1) || $y1 == 1){
        var_dump(true);
        echo '<br>';
    }
    else{
        var_dump(false);
        echo '<br>';
    }
    
    // Xor (xor) Operator True if either $x1 or $y1 is true, but not both:
    if ($x1 == 12 xor $y1 == 1) {
        var_dump(false);
        echo '<br>';
    }
    else if($x1 == 10 xor $y1 == 1) {
        var_dump(true);
        echo '<br>';
    }

    // Not (!) 	True if $x1 is not true:
    if (!$x1 == !$x1){ // !$x1: The ! operator negates the value of $x1. If $x1 is a non-zero value (e.g., 12), !$x1 will evaluate to false. (false == false: This comparison is true because both sides of the equality are false)
        var_dump(true);
        echo '<br>';
    }
    if ($x1 == !$x1){ // !$x1 evaluates to false (since 12 is a truthy value, negating it gives false).So, this is comparing 12 == false, which is false
        var_dump(true);
        echo '<br>';
    }
    else{
        var_dump(false);
        echo '<br>';
    }
    if (!$x1 == 0){ // !$x1: The negation of $x1. With $x1 = 12, !$x1 evaluates to false. false == 0 This is true because in PHP, false is loosely equal to 0 when using the == operator.
        var_dump($x1);
        echo '<br>';
    }


    //PHP String Operators --> PHP has two operators that are specially designed for strings:
    $txt1 = 'Hello ';
    $txt2 = 'World';
    echo $txt1 . $txt2 . '<br>'; // Concatenation(.) operator
    
    $txt1 .= $txt2; // Concatenation Assignment (.=) operator
    echo $txt1 . '<br>';

    // PHP Array Operators --> The PHP array operators are used to compare arrays:
    $arr1 = array('a' => 'Volvo', 'b' => 'BMW', 'c' => 'Toyota');
    $arr2 = array('d' => 'Ferrari', 'e' => 'Bugatti', 'f' => 'Honda');
    $arr3 = $arr1 + $arr2; // union of $arr1 and $arr2

    print_r($arr3);
    echo '<br>';

    $bike_brand = array(0 => 'BMW', '2' => 'Honda', 1 => 20);
    $car_brand = array(0 => 'BMW', 2 => 'Honda', 1 => '20');

    if($bike_brand == $car_brand){ //
        var_dump(true);
        echo 'Have the same key/value pairs';
        echo '<br>';
    }

    if($bike_brand === $car_brand){
        var_dump(true);
        echo 'Have the same key/value pairs in the same order and of the same types' . '<br>';
    }
    else{
        var_dump(false);
        echo '<br>';
    }
    
    // Inequality (!=) and Non-identity Operator:
    var_dump($bike_brand != $car_brand); // False
    echo '<br>';
    var_dump($bike_brand !== $car_brand); // True
    echo '<br>';

    // PHP Conditional Assignment Operators --> The PHP conditional assignment operators are used to set a value depending on conditions:
    echo $status = empty($user) ? 'anonymous' . '<br>' : 'logged in' . '<br>';
    
    $user = 'John Doe';
 
    echo $status = empty($user) ? 'anonymous' . '<br>' : 'logged in' . '<br>';

    // Null coalescing:
    echo $user1 = $_GET['user1'] ?? 'anonymous' . '<br>';
    //
    echo $color = $color ?? 'red' . '<br>';

    ?>

</body>
</html>