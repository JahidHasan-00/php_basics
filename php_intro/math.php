<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math</title>
</head>
<body>
    
    <?php 

        /* PHP Math: */

        // PHP pi() Function --> The pi() function returns the value of PI:
        echo (pi()) . '<br>';

        // PHP min() and max() Functions --> The min() and max() functions can be used to find the lowest or highest value in a list of arguments
        echo 'Min Number is: ' . (min(0, 5, 2, 6, 4, 3)) . '<br>';
        echo 'Max number is: ' . (max(0, 5, 2, 6, 4, 3)) . '<br>';

        // PHP abs() Function --> The abs() function returns the absolute (positive) value of a number:
        $x = -20.0;
        echo (abs($x)) . '<br>';

        // PHP sqrt() Function --> The sqrt() function returns the square root of a number:
        echo (sqrt(64)) . '<br>';
        echo (sqrt(44)) . '<br>';
        echo (sqrt(12)) . '<br>';
        echo (sqrt(9))  . '<br>';
        echo (sqrt(0)) . '<br>';

        // PHP round() Function
        $x1 = 0.64;
        $x2 = 0.43;
        
        echo (round($x1) . '<br>');
        echo (round($x2) . '<br>');

        // Random Numbers --> The rand() function generates a random number:
        echo (rand() . '<br>');
        echo ((rand(-10, 10)) . '<br>');


    ?>

</body>
</html>