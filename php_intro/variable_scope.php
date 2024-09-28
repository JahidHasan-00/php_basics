<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable_Scope</title>
</head>
<body>
    <?php 
        // Variable with global scope:

        $number_x = 10;
        
        function myTest(){
            echo"<h4><i>Variable number_x inside function is: $number_x</i></h4>";
        }
        myTest();

        echo"<h4><i>Variable number_x outside function is:  $number_x</i></h4>" . "<br>";

        
        // // Variable with local scope:

        function myTest2(){
            $number_y = 20;
            echo "<h4><i>Variable number_y inside function is: $number_y</i></h4>";
        }

        echo "$number_y";

        myTest2();

        echo "<h4><i>Variable number_y inside function is: $number_y</i></h4>";


        // PHP the global keyword:
        
        $x = 10;
        $y = 20;

        function keyTest(){
            global $x, $y;
            $y = $x * $y;

            $z = $x + $y;
            echo"$z" . '<br>';
        }
        keyTest();
        
        echo"$y";
        echo"$z";// The line shows an error


        // Static Keyword:
        function keyTest2(){
            static $z = 100;
            echo "$z" . "<br>";
            $z++;
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'] + $z;
            
        }
        keyTest2();
        echo 'Sum of total = ' . $y;
        echo '<br>';
        keyTest2();
        keyTest2();
        keyTest2();
        
        // difference between single and double quotes:
        $myName = 'Linus';
        echo '<h1>Hello $myName </h1>';
        echo "<h1>Hello $myName </h1>";
        
        print '<h1>Hello $myName </h1>';
        print "<h1>Hello $myName </h1>";
    ?>
</body>
</html>