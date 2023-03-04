<?php
    if(isset($_COOKIE['myCarts']))
    {
        echo "My Cart is => ".$_COOKIE['myCarts'];
    }
    else{
        setcookie("myCarts","100");
    }
    
?>