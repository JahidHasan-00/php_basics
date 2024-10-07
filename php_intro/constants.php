<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>
    
    <?php
    
    /** 
     * PHP Constants:
     * Constants are like variables, except that once they are defined they cannot be changed or undefined.
     * A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
     * A valid constant name starts with a letter or underscore (no $ sign before the constant name).
     * Note: Unlike variables, constants are automatically global across the entire script.
     */

    // To create a constant, use the define(name, value) function.
    // Create a constant with a case-sensitive name:
        define("GREETING", "Hello Md.Jahid Hasan");
        echo GREETING . '<br>';
    
    // PHP const Keyword --> You can also create a constant by using the const keyword.
    // Create a case-sensitive constant with the const keyword:
        const myCar = 'Volvo';
        echo myCar . '<br>';
        /*const cannot be created inside another block scope, like inside a function or inside an if statement.
        define can be created inside another block scope.*/

        function myFunc($value) {
            define('myName', $value);
            echo myName .'<br>';
        }
        myFunc('Jahid Hasan');

        // you can create an Array constant using the define() function:
        define('COUNTRY', ['Bangladesh', 'China', 'Palestine']);
        echo COUNTRY[0] . '<br>';


    /**PHP Magic Constants:
     
     * PHP Predefined Constants --> PHP has nine predefined constants that change value depending on where they
       are used, and therefor they are called "magic constants".

     * These magic constants are written with a double underscore at the start and the end, except for the 
       ClassName::class constant

     **/
    // _CLASS_ If used inside a class, the class name is returned:
        
        class Animal {
            public function myValue() {
                return __CLASS__ ;
            }
            public function myValue2($fish) {
                return $fish;
            }
        }
        $bird = new Animal();
        $fish = new Animal();
        echo $fish -> myValue2('Hilsha') . '<br>';
        echo $bird -> myValue() . '<br>';

        // _DIR_ The Directory of file
        echo __DIR__ . '<br>' ;

        // _FILE_ The file name including the full path
        echo __FILE__ . '<br>' ;

        // __FUNCTION__ If inside a function, the function name is returned
        function myName(){
            return __FUNCTION__ ;
        }
        $val = myName();
        echo $val . '<br>';

        // __LINE__ The current line number
        echo __LINE__ . '<br>';

        // __METHOD__ If used inside a function that belongs to a class, both class and function name is returned
        class Foods {
            public function myRecipe() {
                return __METHOD__ ;
            }
        }
        $chicken_chap = new Foods();
        echo $chicken_chap -> myRecipe() . '<br>';

        // __NAMESPACE__ If used inside a namespace, the name of the namespace is returned
        namespace myArea;

        
    ?>

</body>
</html>