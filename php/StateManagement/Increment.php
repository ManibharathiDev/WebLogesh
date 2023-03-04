<?php
    //Cookie Name itemCount
    //
    if(isset($_COOKIE["itemCount"]))
    {
        $oldValue = $_COOKIE["itemCount"];
        $oldValue += 1;
        setcookie("itemCount",$oldValue);
        echo "My Cart Value is =>".$_COOKIE["itemCount"];
    }
    else
    {
        setcookie("itemCount",1);
        echo "My Cart Value is =>".$_COOKIE["itemCount"];
    }
?>