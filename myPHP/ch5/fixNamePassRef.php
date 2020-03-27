<?php
    $a1 = "EDWARD";
    $a2 = "t";
    $a3 = "rEyEs";

    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    fix_names($a1, $a2, $a3);
    echo $a1 . " " . $a2 . " " . $a3;


    // passing by reference mean changes will modify the variables values that are being passed.
    function fix_names(&$n1, &$n2, &$n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
    }
?>