<?php
    $server = "localhost";
    $username="root";
    $password = "manibharathi";
    $dbname = "newDB";

    $uName = $_POST['uname'];
    $pWord = $_POST['pword'];

    try
    {
        
            $conn = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
            // $query = "INSERT INTO tbl_user(username,password) VALUES ('management','admin@123')";
            $query = "INSERT INTO tbl_user(username,password) VALUES ('".$uName."','".$pWord."')";
            $conn->exec($query);
            echo "New row inserted";
    }
    catch(PDOException $e)
    {
        echo "Database Error ".$e->getMessage();
    }
?>