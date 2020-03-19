<?php
    $username = "Edward Reyes";
    echo $username;
    echo "<br>";
    $current_user = $username;
    echo $current_user;

    echo "<br>";
    // Two-dimensional Array
    $oxo = array(array(1,2,3),
                array(4,5,6),
                array(7,8,9));
    echo $oxo[2][2];

    // Operators
    echo "<br>";
    echo 6 + 2;

    $x = 2;
    $x++;
    echo "<br>";
    echo $x;
    $x -= 1;
    echo "<br>";
    echo $x**5; // 2^5
    echo "<br>";
    echo $x**7; // 2^7
    echo "<br>";

    // String Types:
    $variable = "O_O";
    $info = 'Preface variables with a $ like this: $variable'; // appears as is
    echo $info;
    echo "<br>";
    $info = "Preface variables with a $ like this: $variable"; // show value of a variable
    echo $info;
    echo "<br>";

    // heredoc <<< operator for multi-line sequence
    // May not contain any characters before or after the semi-colon (even spaces) 
    $author = "Brian W. Kernighan";

    echo <<<_END
    Debugging is twice as hard as writing code in the first place. 
    Therefore, if you write the code as cleverly as possible, you are,
    by definition, not smart enough to debug it.

    - $author. 
_END;

    // Variable Typing:
    
    // number to string
    echo "<br>";
    $number = 12345 * 67890;
    echo substr($number, 3, 1); // ask for 1 character to be returned at the fourth position. 
    echo "<br>";
    echo substr($number, 2, 5); // ask for 2 characters staring at the third position
    echo "<br>";


    // string to number
    $pi = "3.1415927";
    $radius = 5;
    echo $pi * ($radius *  $radius);
    echo "<br>";

    // Superglobal variables 
    $came_from = htmlentities($_SERVER['HTTP_REFERER']);
    echo "<br>";
    echo $came_from; // returns http://localhost:8888/php_mysql/myPHP/ch3/

?>