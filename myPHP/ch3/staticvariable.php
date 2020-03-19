<?php
    function test()
    {
        static $count = 0;
        $count++;
        echo $count;
    }

    test();
    echo "<br>";
    test();
    echo "<br>";
    test();
    echo "<br>";
    test();
    echo "<br>";
    test();
    echo "<br>";

?>