<?php
    session_start();

    session_destroy();

    if(isset($_SESSION['isLogin']))
        echo "Login Status ".$_SESSION['isLogin']."<br/>";
    if(isset($_SESSION['USERNAME']))
        echo "User Name ".$_SESSION['USERNAME']."<br/>";
    if(isset($_SESSION['USERROLE']))
        echo "User Role ".$_SESSION['USERROLE']."<br/>";
    if(isset($_SESSION['ISVALID']))
        echo "Valid Status ".$_SESSION['ISVALID']."<br/>";

    if(isset($_SESSION['isLogin']))
        echo $_SESSION['isLogin'];
    //delete the session
    unset($_SESSION['isLogin']);

    if(isset($_SESSION['isLogin']))
        echo $_SESSION['isLogin'];
    else
        echo "Session Destroyed";

?>