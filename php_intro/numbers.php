<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
</head>
<body>
    
    <?php 
        /** PHP Integers: 
         *  An integer is a number without any decimal part.
         *  
         *  An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.
         */

        $x = 9223372036854775807;
        $y = 9223372036854775808;

        var_dump(is_int($x));
        echo '<br>';

        var_dump($x);
        echo '<br>';

        var_dump($y);
        echo '<br>';
         
        var_dump(is_int($y));
        echo '<br>';

        // PHP Floats: A float is a number with a decimal point or a number in exponential form.
        $f = 10.3E65;
        var_dump(is_float($f));
        echo '<br>';

        // PHP Infinity: A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
        $f1 = 1.9e411;
        var_dump($f1);
        echo '<br>';
        var_dump($f);
        echo '<br>';

        // PHP NaN: NaN stands for Not a Number. NaN is used for impossible mathematical operations.
        $iNum = asin(8);
        var_dump($iNum);
        echo '<br>';

        // PHP Numerical Strings: The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.
        $numericalString = '10345';
        $numericalString2 = '10345';
        $numericalString3 = 'Hello World';
        var_dump(is_numeric($numericalString));
        echo '<br>';
        var_dump(is_numeric($x));
        echo '<br>';
        var_dump(is_numeric($numericalString2));
        echo '<br>';
        var_dump(is_numeric($numericalString3));
        echo '<br>';
    ?>

</body>
</html>