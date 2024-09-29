<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Casting</title>
</head>
<body>
    <?php
        $x = 5;
        var_dump($x );
        echo"<br>";

        $x = 'Hello';
        var_dump($x );
        echo"<br>";
        echo $x . '<br>';

        /* If you want to change the data type of an existing variable,
           but not by changing the value. You can use casting :
        */
        $num = 10;
        var_dump($num );
        echo "<br>";

        $num = (string)$num;
        var_dump($num );

        echo "<br>";
        echo $num;

        // Cast to String use the (string) statement:

        $a = 5; // Integer
        $b = 5.34; // Float
        $c = 'Bangladesh'; // String
        $d = true; // Boolean
        $e = null; // Null

        $a = (string)$a;
        $b = (string)$b;
        $c = (string)$c;
        $d = (string)$d;
        $e = (string)$e;

        // Verify the type:
        var_dump($a);
        echo'<br>';
        var_dump($b);
        echo'<br>';
        var_dump($c);
        echo'<br>';
        var_dump($d);
        echo'<br>';
        var_dump($e);
        echo'<br>';

        // To Cast to Integer use the (int) statement:

        $f = '24 hours'; // String
        $g = 'hours 24'; // String
        
        $a = (int)$a;
        $b = (int)$b;
        $c = (int)$c;
        $d = (int)$d;
        $e = (int)$e;
        $f = (int)$f;
        $g = (int)$g;

        var_dump($a);
        echo'<br>';
        var_dump($b);
        echo'<br>';
        var_dump($c);
        echo'<br>';
        var_dump($d);
        echo'<br>';
        var_dump($e);
        echo'<br>';
        var_dump($f);
        echo '<br>';
        var_dump($g);
        echo '<br>';

        // // To Cast to Float use the (float) statement:
        $a = (float)$a;
        $b = (float)$b;
        $c = (float)$c;
        $d = (float)$d;
        $e = (float)$e;
        $f = (float)$f;
        $g = (float)$g;

        var_dump($a);
        echo'<br>';
        var_dump($b);
        echo'<br>';
        var_dump($c);
        echo'<br>';
        var_dump($d);
        echo'<br>';
        var_dump($e);
        echo'<br>';
        var_dump($f);
        echo '<br>';
        var_dump($g);
        echo '<br>';

        // To Cast to Boolean use the (bool) statement:
        $h = 0;
        $i = -1;
        $j = 0.1;
        $k = '';

        $h = (bool)$h;
        $i = (bool)$i;
        $j = (bool)$j;
        $k = (bool)$k;
        $a = (bool)$a;
        $b = (bool)$b;
        $c = (bool)$c;
        $d = (bool)$d;
        $e = (bool)$e;

        var_dump($a);
        echo '<br>';
        var_dump($b);
        echo '<br>';
        var_dump($c);
        echo '<br>';
        var_dump($d);
        echo '<br>';
        var_dump($e);
        echo '<br>';
        var_dump($h);
        echo '<br>';
        var_dump($i);
        echo '<br>';
        var_dump($j);
        echo '<br>';
        var_dump($k);
        echo '<br>';

        // To Cast to Array use the (array) statement:
        $a = (array)$a;
        $b = (array)$b;
        $c = (array)$c;
        $d = (array)$d;
        $e = (array)$e;
        
        var_dump($a);
        echo'<br>';
        var_dump($b);
        echo '<br>';
        var_dump($c);
        echo '<br>';
        var_dump($d);
        echo '<br>';
        var_dump($e);
        echo '<br>';

        // Converting Objects into Arrays:
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            public function message() {
                return 'My car is a ' . $this->color . ' ' . $this->model . '!';
            }

        }

        $myCar = new Car('red', 'volvo');
        echo $myCar->message() . '<br>';

        $myCar = (array)$myCar;
        var_dump($myCar);
        echo '<br>';

        // To Cast to Object use the (object) statement:
        $a = (object)$a;
        $b = (object)$b;
        $c = (object)$c;
        $d = (object)$d;
        $e = (object)$e;

        var_dump($a);
        echo'<br>';
        var_dump($b);
        echo '<br>';
        var_dump($c);
        echo '<br>';
        var_dump($d);
        echo '<br>';
        var_dump($e);
        echo '<br>';

        $arr1 = array('BMW', 'VOLVO', 'TESLA'); // Indexed Array
        $arr2 = array('Peter' => '40', 'Ben' => '35', 'Joe' => '30'); // Associative Array

        $arr1 = (object)$arr1;
        $arr2 = (object)$arr2;

        var_dump($arr1);
        echo'<br>';
        var_dump($arr2);
        echo '<br>';

        // To Cast to NULL use the (unset) statement:
        $a = (unset) $a;
        $b = (unset) $b;
        $c = (unset) $c;
        $d = (unset) $d;
        $e = (unset) $e;

        var_dump($a);
        echo '<br>';
        var_dump($b);
        echo '<br>';
        var_dump($c);
        echo '<br>';
        var_dump($d);
        echo '<br>';
        var_dump($e);
        echo '<br>';

    ?>
</body>
</html>