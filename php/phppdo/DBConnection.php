<?php
    $server = "localhost";
    $username="root";
    $password = "manibharathi";
    $dbname = "newDBs";

    try
    {
            $conn = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
            echo "Database Connection Successfull";
    }
    catch(PDOException $e)
    {
        echo "Database Error ".$e->getMessage();
    }
?>