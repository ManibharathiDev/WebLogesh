<?php
    echo "Qtree Technologies<br/>";
    echo "PHP Application Development<br/>";
    //exit("Test");
    //Database Connection, File Operations

    $firstNumber = 10;
    $denominator = 0;
    
    // if($denominator == 0)
    //     echo "You can't do this operation because of denominator is zero!";
    // else    
    //     {
    //         $result = $firstNumber/$denominator;
    //         echo $result;
    //     }

    //Database
    // Connect
    // DB Connection Open
    // Do Some Query
    //DB close

        //Recommended
    $firstNumber = 10;  
    $denominator = 0;  
    try{
        if($denominator == 0)
            throw new Exception("Division by zero");
        $result = $firstNumber/$denominator;
        echo $result;
    }    
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
    finally{
        echo "<br/>I am done!";
    }




    

    //die("Invalid Credentials"); // Echo with Exit();
    //echo "Front End Application Development<br/>";
?>