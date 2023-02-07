<?php
    $myName = "Logesh";
    //Array
    //echo strlen($myName);
    //echo $myName[0];
    //echo $myName[1];

    // Q1: Print the name using For Loop

    for($i = 0; $i < strlen($myName) ;$i++)
    {
        echo $myName[$i];
    }

    //Q2. Reverse the String
    //echo strrev($myName);//Built in Function

    for($i = strlen($myName)-1; $i >= 0; $i--)
    {
        echo $myName[$i];
    }

    //Q3: Polindrome
    // MALAYALAM = MALAYALAM (Original String == Reverse the Original String)
    //
    //M A L A Y A L A M





?>