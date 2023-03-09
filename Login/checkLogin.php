<?php
    session_start();
    //userName : jack@gmail.com
    //password : Welcome@123

    $uName = $_POST['userName'];
    $pWord = $_POST['passWord'];
    // echo "User Name = ".$uName;
    // echo "<br/>Pass Word = ".$pWord

    if($uName == "jack@gmail.com" && $pWord == "Welcome@123")
    {
        $_SESSION['USER_NAME'] = $uName;
        $_SESSION['isLogin'] = true;
        header('Location:home.php');

    }
    else
    {
        echo "Invalid Credentials!";
    }
    
?>