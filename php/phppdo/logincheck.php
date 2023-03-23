<?php
    $server = "localhost";
    $username="root";
    $password = "manibharathi";
    $dbname = "newDB";
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    try
    {
        $conn = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
        $query = "SELECT * FROM tbl_user WHERE username='".$uname."' AND password='".$pword."'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() == 1)
        {
            header('location:Dashboard.php');
            //echo "Login Successful";
        }
        else
        {
            echo "Invalid Credentials";
        }
        //echo $stmt->rowCount();

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
 ?>   