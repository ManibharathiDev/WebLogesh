<?php
    $server = "localhost";
    $username="root";
    $password = "manibharathi";
    $dbname = "newDB";

    try
    {
            $id = $_GET['id'];
            $json = array();
            $conn = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
            $query = "DELETE FROM tbl_user WHERE id = '".$id."'";
            $stmts = $conn->prepare($query);
            $stmts->execute();
            $json['success'] = 1;
            echo json_encode($json);
           
    }
    catch(PDOException $e)
    {
        echo "Database Error ".$e->getMessage();
    }
?>