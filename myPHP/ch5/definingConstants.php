<?php

    Translate::lookup(); // :: operator calls class directly without creating instance of ir first.available
    

    class Translate 
    {
        const ENGLISH = 0;
        const SPANISH = 1;
        const FRENCH = 2;
        const GERMAN = 3;


        static function lookup()
        {
            // :: operator
            echo self::SPANISH;
        }
    }


?>