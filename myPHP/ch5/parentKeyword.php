<?php

    $object = new Son;
    $object->test();
    $object->test2();

    class Dad
    {
        function test()
        {
            echo "[Class Dad] I am your Father<br>";
        }
    }

    class Son extends Dad
    {
        function test()
        {
            echo "[Class Son] I am Luke<br>";
        }

        function test2()
        {
            parent::test(); // use parent keyword to use the parents class method of the same name.
        }
    }

?>