<?php
    //Functions
    //A Functions is a unit of code 
    // A functions is a piece of code
    //Advantage
    // Reusability

    //Create PHP function
    // function functionName()
    // {

    // }
    
    /**
     * printMyName : Name of the Function
     */
    function printMyName()
    {
        echo "I am Logesh!";
        
    }

    function printMyAges()
    {
        echo "I am 25";
        
    }

    //printMyName();
    //printMyAge();

    //Functions Returning Value

    function addTwoNumber(){
        $first = 10;
        $second = 20;
        //echo $first+$second;
        $result = $first+$second;
        return $result;
    }

    $result = addTwoNumber();
    //echo $result;

    function Polindrome($value)
    {
        $pol = $value;
        //$pol = "MALAYALAMS";
        $i = 0;
        $j = strlen($pol)-1;
        $flag = true;
        while($i<$j)
        {
            if($pol[$i] != $pol[$j])
            {
             $flag = false;
                break;
             }
            $i++;
            $j--;
        }
        return $flag;
    }

    $checkPolindrome = Polindrome("MALAYALAMS");
    if($checkPolindrome == true)
    {
        echo "Your string is Polindrome";
    }
    else{
        echo "Your string is not a Polindrome";
    }

    $checksPolindrome = Polindrome("NAMAN");
    if($checksPolindrome == true)
    {
        echo "Your string is Polindrome";
    }
    else{
        echo "Your string is not a Polindrome";
    }

    // Function with Parameters

    // function functionName(param1,param2,....paramN)
    // {

    // }

    function printMyDetails($myName,$age){
        echo "My Name is ".$myName." My Age is ".$age;
    }

    printMyDetails("Logesh",28);

    //GET,POST,REQUEST
    //FUNCTIONS
    //BASIC FUNCTIONS
    //FUNCTION WITH PARAM AND WITH RETURN VALUE
    //FUNCTION WITHOUT PARAM ADN WITH RETURN VALUE

?>