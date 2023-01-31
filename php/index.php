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
    
     $a = 10;
     $b = 20;
     $c = 5;
     //1. Understanding the problems   
     //2. Making IDEA
     //3. Applying in our program

     //$a > $b && $a > $c

     //$b or $c

   //   if($a > $b && $a > $c)
   //   {
   //      echo "A is greatest number";
   //   }
   //   else if($b > $c)
   //   {
   //      echo "B is greatest number";
   //   }
   //   else{
   //      echo "C is greatest number";
   //   }

   //Write a php program to find greatest number between the four numbers

   // $a = 10;
   // $b = 20;
   // $c = 35;
   // $d = 5;
   // if($a > $b && $a > $c && $a > $d)
   // {
   //    echo "A is greatest number";
   // }
   // else if($b > $c && $b > $d)
   // {
   //    echo "B is greatest number";
   // }
   // else if($c > $d)
   // {
   //    echo "C is greatest number";
   // }
   // else{
   //    echo "d is greatest number";
   // }

   //Nested If-Else

   // $a = 10;

   // if($a > 5)
   // {
   //       if($a > 2)
   //       {
   //          echo "A is greatest number";
   //          if(condition)
   //          {

   //          }
   //       }
   //       else{

   //       }
   // }
   // else{

   // }

   // Write a program to find given number is odd or even number
   // Odd Number : 1 3 5 7 9.....N
   // Even Number : 2 4 6 8 10.....N
    // $num = 18;
    // $remainder = $num%2;
    // if($remainder == 0)
    //   echo("The number is even");
    // else
    //   echo ("The number is odd");

   // Looping Statments - Iterations 
  //  1. For Loop
  //  2. While Loop
  //  3. Do-While Loop

  //Q.Write a php program to print 1 to 10 numbers;

  // echo("1");
  // echo("2");
  // echo("3");
  // echo("10");

  //For Loop Syntax
  // for(initializtion;condition;incre/decre)
  // {
  //     code block
  // }
    // $i++ = $i = $i+1
    
  // for($i = 1; $i <= 10; $i++)
  // {
  //     echo($i);
  // }

  // for($i = 1; $i <= 10; $i++)
  // {
  //     if($i%2 == 0)
  //     {
  //         echo($i." is odd number ");
  //     }
  // }
    //print odd number
  for($i = 2; $i <= 10; $i=$i+2)
  {
      echo ($i.",");
  }

  // print even number
  for($i = 1; $i <= 10; $i=$i+2)
  {
      echo ($i.",");
  }

  //Find even numbers between 1 to 10
    // 2,4,6,8,10




    


    



?>