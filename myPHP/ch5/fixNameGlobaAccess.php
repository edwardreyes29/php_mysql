<?php
    $a1 = "EDWARD";
    $a2 = "t";
    $a3 = "rEyEs";

    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    fix_names();
    echo $a1 . " " . $a2 . " " . $a3;


    // passing by reference mean changes will modify the variables values that are being passed.
    function fix_names()
    {
        global $a1; $a1 = ucfirst(strtolower($a1));
        global $a2; $a2 = ucfirst(strtolower($a2));
        global $a3; $a3 = ucfirst(strtolower($a3));
    }

?>