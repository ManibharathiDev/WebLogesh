<?php
    
    function my_error_handler($error_no, $error_msg)
     {
        echo "OMG, Something went wrong";
        echo "Error number is ".$error_no;
        echo "Error message is ".$error_msg;
     }
     set_error_handler("my_error_handler");
    /**
     * Die statements– the die function combines the 
     * echo and exit function in one. 
     * It is very useful when we want to output a message and 
     * stop the script execution when an error occurs.
     */
    //die("Database error");
    echo("Good Error");

    //Custom error handlers – these are user defined 
    //functions that are called whenever an error occurs.

    $firstNumber = 10;
    $denominator = 0;
    if($denominator != 0)
    {
        $result = $firstNumber / $denominator;
        echo $result;
    }
    else    
    {
        echo "You can't do this operation because of denominator is zero";
    }

    /**
     * The custom error handler will be set as the default 
     * PHP error handling function and will 
     * basically display an error number and message.
     */

     
     echo(20/0);
    

