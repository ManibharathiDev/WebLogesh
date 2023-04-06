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
            $query = "SELECT * FROM tbl_user WHERE id = '".$id."'";
            //$query = "SELECT * FROM tbl_user WHERE id = '".$id."'";
            $stmts = $conn->prepare($query);
            $stmts->execute();
            $stmts->setFetchMode(PDO::FETCH_ASSOC);
            $json['success'] = 1;
            $json['data'] = array();
            $tmp = array();
            while ($row = $stmts->fetch()) 
            {
                $tmp[] = $row;
            }
            $json['data'] = $tmp;

            //json_encode(array);

            //print_r($json);
            echo json_encode($json);
           
    }
    catch(PDOException $e)
    {
        echo "Database Error ".$e->getMessage();
    }
?>