<?php
    //Switch Case
    //Syntax
    // switch(case)
    // {
    //     case "value":
    //         break;
    //     case "value 2":
    //         break;
    //     case "value N":
    //         break;
    //     default:
    //         break;            
    // }

    $Num = 8;
    switch($Num)
    {
        case 1:
            echo "First";
            break;
        case 2:
            echo "Second";
            break;
        case 3:
            echo "Three";
            break;
        case 4:
            echo "Four";
            break;
        case 5:
            echo "Five";
            break;
        case 6:
        case 7:
        case 8:
            echo "I am Happy";
            break;            
        default:
            echo "I am out";
            break;                

    }

    $country = "Srilanka";
    switch($country)
    {
        case "Pakistan":
            echo "I am from Pakistan";
            break;
        case "India":
            echo "I am from India";
            break;
        case "USA":
            echo "I am from USA";
            break;
        default:
            echo "I am out of the World!";
            break;            
    }

    $number = 9;
    $result = $number%2;
    switch($result)
    {
        case 0:
            echo "Even number";
            break;
        case 1:
            echo "Odd Number";
            break;    
    }

    //Decision Making
    //If
    //If-Else
    //If-else-if
    //Nested If-else
    //Switch Case

    //Looping 
    //For
    //While
    //Do-While
    //foreach - Arrays

?>