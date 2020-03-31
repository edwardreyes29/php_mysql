<?php

    /*
        Static methods belong to the class, not an object of this class.

        To call static mehtod, use the scope resltuion operator ::. -> won't work.available
        
    */
    User::pwd_string();

    class User
    {
        static function pwd_string()
        {
            echo "Please enter your password";
        }
        
    }

?>