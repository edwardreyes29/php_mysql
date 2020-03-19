<?php
    echo "a: [" . TRUE . "]<br>";
    echo "b: [" . FALSE . "]<br>";
    echo "c: [" . (20 > 9) . "]<br>";
    echo "d: [" . (5 == 6) . "]<br>";
    echo "e: [" . (1 == 0) . "]<br>";
    echo "f: [" . (1==1) . "]<br>";

    $day_number = 60;
    $days_to_new_year = 366 - $day_number;

    if ($days_to_new_year < 30) 
    {
        echo "Not long now till new year.<br>";
    }
    else 
    { 
        echo "Still a long ways to go.<br>";
    }

    // Equality
    $a = "1000";
    $b = "+1000";

    if ($a == $b) echo "1<br>"; // both strings were converted to numbers.
    if ($a === $b) echo "2<br>"; // turns this behavior off.
    if ($a != $b) echo "!1<br>";
    if ($a !== $b) echo "!2<br>";

    // elseif statement 
    if ($bank_balance < 100) 
    {
        // if true, transfer 1000 to bank balance
        $money          = 1000;
        $bank_balance   += $money;
    }
    elseif ($bank_balance > 200)
    {
        // add 100 to your savings
        $savings        += 100;
        $bank_balance   -= 100;
        
    }
    else
    {
        // Otherwise, add 50 to your savings
        $savings        += 50;
        $bank_balance   -= 50;
    }

    // Ternary Operator (You can assign entire ? conditional result to a variable)
    // ? - if comparison is true, : - if comparison is false
    $fuel = 0.5;
    $enough = $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
    echo $enough;
    echo "<br>";

    // while loop, add pre-increment in conditional 
        $count2 = 0;

        while(++$count2 <= 12)
            echo "$count times 12 is " . $count2 * 12 . "<br>";

    // for loop
    $fp = fopen("text.txt", 'wb');

    for ($j = 0; $j < 100; ++$j)
    {
        // $written = fwrite($fp, "data"); // returns value to $written of number of characters written, an error returns FALSE.
        if (!fwrite($fp,"data\n")) break; // if ($written == FALSE) break; if (!$written) break;
    }
    fclose($fp);
    
?>