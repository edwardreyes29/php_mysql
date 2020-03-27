<?php
    // echo fix_names("WILLIAM", "henRy", "gAtEs");
    $nameArray = fix_names("WILLIAM", "henRy", "gAtEs");
    echo($nameArray[0] . " " . $nameArray[1] . " " . $nameArray[2]);

    function fix_names($n1, $n2, $n3) 
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        // return $n1 . " " . $n2 . " " . $n3;
        return array($n1, $n2, $n3);
    }
?>