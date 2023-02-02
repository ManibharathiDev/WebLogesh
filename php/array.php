<?php
    //1. 1 D
    //2. Associative Array
    //3. Multi dimensional Array

    //Array
    //If we want to store multiple values in a same variable instead of multiple variables,
    //we can choose array

    //$number = 1,2,3,4,5,6,7,8;

    $number = array(1,2,3,4,5,6);

    // echo $number[0];
    // echo $number[1];
    // echo $number[2];
    // echo $number[3];
    // echo $number[4];
    // echo $number[5];

    //Array Update

    $number[0] = 10;
    //echo $number[0];
    $number[2] = 20;

    $number[6] = 30;

    //echo $number[6];

    // $number[7] = "Logesh";
    // echo $number[7];

    //Java, c, c++,go, 
    //we can store the home geneous values in single array.
    //Hetro geneous

    //echo $number[6];
    $length = 7;
    for($i = 0; $i<$length; $i++)
    {
        //echo $number[$i].", ";
    }

    //Q. Sum of all numbers in a given array
    // [10,20,30,40,50];
    // length = 5
    $arr = array(10,20,30,40,50);
    $length = 5;
    //$ans = $arr[0]+$arr[1]+$arr[2]+$arr[3]+$arr[4];
    //echo "The sum is =>".$ans;
    $sum = 0;
    for($i = 0; $i<$length; $i++)
    {
        //$sum = $sum + $arr[$i];
        $sum += $arr[$i];
    }
    echo "The sum is => ".$sum;

    

?>