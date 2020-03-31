<?php
    $object = new User;
    print_r($object); // print_r - Prints human-readable information about variable

    $temp = new User('Edward', 'password123');
    echo("<br>");
    print_r($temp);

    class User 
    {
        public $name, $password;

        function save_user()
        {
            echo "Save User code goes here";
        }
    }

?>