<?php
    //Start the Session
    session_start();
    echo session_id();
    //Create Session
    $_SESSION['isLogin'] = 1;
    
    $_SESSION['USERNAME'] = "manibharath159@gmail.com";
    $_SESSION['USERROLE'] = "ADMIN";
    $_SESSION['ISVALID'] = 1;

    echo "Login Status ".$_SESSION['isLogin']."<br/>";

    echo "User Name ".$_SESSION['USERNAME']."<br/>";

    echo "User Role ".$_SESSION['USERROLE']."<br/>";

    echo "Valid Status ".$_SESSION['ISVALID']."<br/>";

    
?>