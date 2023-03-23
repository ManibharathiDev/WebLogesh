<?php
    $servername ="localhost";
    $username="root";
    $password="manibharathi";
    $database="testDB";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=testDB",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Database Connected";
    }
    catch(PDOException $e) 
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>