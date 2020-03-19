<?php   

    $text = "The date is ";
    echo longdate($text, time());
    echo "<br>";

    // print dat 17 days ago
    echo longdate($text, time() - 17 * 24 * 60 * 60); // 17 days x 24 hours x 60 minutes x 60 seconds

    function longdate($text, $timestamp)
    {
        return $text . date("l F jS Y", $timestamp);
    }
    
?>