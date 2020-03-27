<?php 
    echo date("l"); // Displays the day of the week

    // phpinfo();
    echo("<br>");
    // Three string functions
    echo strrev(" .dlrow olleH");    // Reverse the string
    echo str_repeat("Hip ", 5); // Repeat string
    echo strtoupper("hooray!");   // String to uppercase

    // strtolower()
    echo("<br>");
    $lowered = strtolower("tHis sentence needs OnlY tHe FirsT chaRacTer caPiTalizEd");
    echo $lowered;
    //ucfirst()
    echo("<br>");
    $ucfixed = ucfirst($lowered);
    echo($ucfixed);

    // Nest strlower within ucfirst
    echo("<br>");
    $ucfixed = ucfirst(strtolower("edWaRd"));
    echo($ucfixed);


    // PHP version compatibility
    echo("<br>");
    if (function_exists("array_combine"))
    {
        echo "Function exists";
    }
    else 
    {
        echo "Function does not exist - better write our own";
    }

    echo("<br>");
    echo(phpversion());
?>