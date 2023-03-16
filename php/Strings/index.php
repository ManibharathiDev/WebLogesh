<?php
    $myName = "NAMANS";

    echo $myName;

    echo "<br/>";

    //echo $myName[5];

    //echo strlen($myName);
    //echo strrev($myName);

    //String Reverse
    //Number
    $len = strlen($myName);

    // for($i = $len-1; $i>=0; $i--)
    // {
    //     echo $myName[$i];
    // }

    //POLINDROME

    // $rev = strrev($myName);

    // if($myName == $rev)
    //     {
    //         echo "This is polindrome";
    //     }
    //     else{
    //         echo "Not a polindrome";    
    //     }

    $i = 0;
    $j = strlen($myName)-1;  
    $isPolindrome = true;
    while($i<strlen($myName)-1 && $j>=0)
    {
        if($myName[$i] != $myName[$j])
        {
            $isPolindrome = false;
            break;
        }
        $i++;
        $j--;
    }
    if($isPolindrome)
        echo "This is polindrome";
    else
        echo "Not a Polindrome";

    //String Functions
    //strlen
    //strrev
    //Concatenation
    //Convert Uppercase
    //Convert Lowercase
    //contain
    //split
    //join

    //1. Encryption
    echo "<br/>";
    $password = "Secure@34#";
    $hash = crypt($password,"test");
    //echo $hash;
    //MD5
    //SHA
    echo "<br/>";
    $lPassword = "Secure@34#";
    echo $hash;
    if(hash_equals($hash,crypt($lPassword,"test")))
    {
        echo "Login Verified";
    }
    else
    {
        echo "Invalid Login";
    }

    echo "<br/>";
    $myPassword = "logu123";
    $baseencode = base64_encode($myPassword);
    echo "<br/>";
    echo base64_decode($baseencode);

    // 

    // Digits Polindrome
    // Create a Registration and Login Form with crypt
    // Registration, Login, Password Crypt
    

?>