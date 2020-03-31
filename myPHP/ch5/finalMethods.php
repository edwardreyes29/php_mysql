<?php

    /*
        If you don't want subclass to overwrite the supercalss method,
        use final keyword.
    */
    class User
    {
        final function copyright()
        {
            echo "This class was writen by Edward Reyes";
        }
    }

?>