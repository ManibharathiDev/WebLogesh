<?php
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
        //echo ($i.",");
    }
  
    // print even number
    for($i = 1; $i <= 10; $i=$i+2)
    {
        //echo ($i."\n");
    }

    //Q. Print number between 10 to 1
    for($i = 10; $i>=1; $i--)
    {
        //echo ($i.", ");
    }

    //While Loop
    //Syntax
    // intializtion;
    // while(condition)
    // {
    //     true block;
    //     inc/dec
    // }
    // Entry Level Checking    
    $i = 1;
    while($i<=10)
    {
        //echo($i." ");
        $i++;
    }

    $i = 1;
    while($i <=10)
    {
        if($i%2 == 0)
        {
           //echo($i." is odd number ");
           
        }
        $i++;
    }

    //Do While
    // Exit Level Checking
    //Syntax
    // initializtion
    // do
    // {
    //     code block;
    // }while(condition);

    $i = 1;
    do{
        //echo $i;
        $i++;
    }while($i>2);

    $n = 7362;
    if($n%2 == 0)
    {
        //echo $n." is even number";
    }
    else{
        //echo $n."is odd number";
    }


