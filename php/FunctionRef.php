<?php

    // Function calling by value

    // function printMyName($name)
    // {
    //     $name = "King";
    //     echo $name;
    // }

    // $name = "Logesh";
    // printMyName($name);
    

    //Function call by reference (Memory- Storage)

    // function printMyName(&$name)
    // {
        
    //     $name = "King";
    //     //echo $name;
    // }

    // $name = "Logesh";
    // printMyName($name);

    // echo $name;

    function changeMyAge(&$age,$name){
        $age = 45;
        $name = "Jockey";
    }

    $myage = 25;
    $names = "logesh";
    changeMyAge($myage,$names);

    echo $myage;
    echo $names;
    
   
?>