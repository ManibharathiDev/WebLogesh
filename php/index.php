<?php
    // echo "Hello Developer!";
    // echo ("hello Developer\n");
    // print "Hello Developer!\n";
    // print ("Hello Developer!");

    //Variable Declaration
    // $myName = "Logesh";
    // echo $myName;
    // $myAge = 25;
    // echo $myAge;
    // $mySalary = 25000.50;
    // $isAvailable = true;
    // echo $isAvailable;
    // $m = 45;

    // $my_name = "Jack";
    // $_myName = "Antony";
    // $myname = "Kadhir";
    // $sd9kjfdsf = "dfsd";

    // $your_name = "Sakthi";
    // $YOUR_NAME = "Raja";

    // $firstName = "Mark";
    // $secondName = "Zukerberg";
    // $fullName = $firstName." ".$secondName;
    // echo $fullName;
    
    //Operators
    //1.Arithmetic Operators - Add,Subtraction,multiplication,division, modulas
    //2.Logical Operators - && || 
    //3. Comparison operators ==, !=, >,<, >=, <=

    $firstNumber = 10;
    $secondNumber = 20;
    $result = $firstNumber + $secondNumber;
    //echo $result;

    $result = $firstNumber - $secondNumber;
    //echo $result;

    $result = $firstNumber * $secondNumber;
    //echo $result;

    $result = $firstNumber / $secondNumber;
    //echo $result;

    $result = 6%4;
    //echo $result;

    // true && true => true
    // true && false => false
    // false && true => false
    // false && false => false

    //true || true = true
    //true || false = true
    //false || true = true;
    //false || false = false;

    //Conditional Operators
    //write a php program to check a given number is 10 
    //$a = 10;
    //IF Statment
    // if($a == 10)
    // {
    //     echo "The given number is 10";
    // }

    //IF - ELSE
    //write a php program to check a given number is 10 OR NOT
    //  $a = 10;   
    // if($a == 10)
    // {
    //     echo "The given number is 10";
    // }
    // else{
    //     echo "The given number is not 10";
    // }

    //Write a php program to find greatest number between the two number
    // $a = 16;
    // $b = 12;

    // if($a > $b)
    // {
    //     echo $a." is greatest number between ".$a." & ".$b;
    // }
    // else{
    //     echo $b." is greatest number between ".$a." & ".$b;
    // }

    //Write a php program to find greatest number between the three numbers.
    //Write a php program to find greatest number between the four numbers
     $a = 10;
     $b = 20;
     $c = 5;
     //1. Understanding the problems   
     //2. Making IDEA
     //3. Applying in our program

     //$a > $b && $a > $c

     //$b or $c

     if($a > $b && $a > $c)
     {
        echo "A is greatest number";
     }
     else if($b > $c)
     {
        echo "B is greatest number";
     }
     else{
        echo "C is greatest number";
     }

?>