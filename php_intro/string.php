<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String</title>
</head>
<body>
    <?php 

        // String Length --> The PHP strlen() function returns the length of a string:
        $country = 'Bangladesh';
        // echo strlen($country);
        // echo'<br>';

        // // Word Count --> The PHP str_word_count() function counts the number of words in a string:
        // echo str_word_count('Welcome to ' . $country);
        // echo '<br>';

        // // Search For Text Within a String --> The PHP strpos() function searches for a specific text within a string:
        // $x = 'I Love my Country';
        // echo strpos($x, 'country');
        // echo strpos($x, 'cat');

        // // Upper Case --> The strtoupper() function returns the string in upper case:
        // echo strtoupper($country);
        // echo '<br>';

        // // Lower Case --> The strtolower() function returns the string in lower case:
        // echo strtolower($country);
        // echo '<br>';

        // Replace String --> The PHP str_replace() function replaces some characters with some other characters in a string:
        $change_country_name_to_state =  str_replace('Bangladesh', 'Dhaka', $country);
        echo $change_country_name_to_state;
        echo '<br>';

        echo $country;
        echo '<br>';

        // Reverse a String --> The PHP strrev() function reverses a string:
        $y = 'Hello World';
        echo strrev($y);
        echo '<br>';

        // Remove Whitespace --> The trim() removes any whitespace from the beginning or the end:
        $a = " She is nice and attractive ";
        echo trim($a) . '<br>';
        
        // Remove characters from both sides of a string ("He" in "Hello" and "d!" in "World"):
        $str = "\n\n\nHello World!\n\n\n";
        $trim_str = trim($str);

        echo $str . '<br>';
        echo $trim_str . '<br>';

        // Convert String into Array --> The PHP explode() function splits a string into an array:
        $w = explode(' ', $a);
        print_r($w);
        echo '<br>';

        /* Slicing --> You can return a range of characters by using the substr() function.
                       Start the slice at index 6 and end the slice 5 positions later

                       Slice to the End --> By leaving out the length parameter, the range will go to the end
                       Start the slice at index 6 and go all the way to the end

                       Slice From the End --> Use negative indexes to start the slice from the end of the string

                       Negative Length --> Use negative length to specify how many characters to omit, starting from the end of the string:
        */

        $str1 = 'Good-Morning!';
        echo substr($str1, 6, 5) . '<br>';
        
        echo substr($str1, 4) . '<br>';
        
        // Use negative indexes to start the slice from the end of the string(Note: The last character has index -1):
        echo substr($str1, -4, 3) . '<br>'; // Output: ing

        // Use negative length to specify how many characters to omit, starting from the end of the string:
        echo substr($str1, 4, -1) . '<br>'; // Output: -Morning


        /* Escape Character --> To insert characters that are illegal in a string, use an escape character
                                An escape character is a backslash \ followed by the character you want to insert:
         */
        
        // $str3 = 'Every developer should practice clean 'and efficient' code.';
        // echo $str3; // output: syntax error

        $str3 = "Every developer should practice clean \"and efficient\" code.";
        echo $str3 . '<br>';

        $my_var = "Hasan";
        $my_var2 = "Md.Jahid \$my_var";
        echo $my_var2 . '<br>';

        echo substr($my_var2, 0, -7) . $my_var . '<br>';
        
        $place = "Dhaka\nBangladesh";
        $place2 = "Dhaka\rBangladesh";
        $is_true = "New\t\tBangladesh";
        echo $place . "<br>";
        echo $place2 . "<br>";
        echo $is_true . "<br>";

        // A backslash followed by three integers will result in a octal value:
        echo "\112\101\110\111\104" . "<br>";

        // A backslash followed by an 'x' and a hex number represents a hex value:
        echo "\x4A\x41\x48\x49\x44" . "<br>";
            
    ?>
</body>
</html>