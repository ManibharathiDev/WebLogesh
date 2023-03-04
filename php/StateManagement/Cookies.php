<?php
    //Create a Cokkie
    //Associative Array
    //key:value
    setcookie("myCart",1);
    
    setcookie("myItem","Watch");

    echo time();
    //
    setcookie("myAge",28,time()+3600);

    //remove Cookie

    setcookie("myAge",0,time()-60);

?>