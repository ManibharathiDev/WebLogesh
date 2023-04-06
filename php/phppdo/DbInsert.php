<?php
    $server = "localhost";
    $username="root";
    $password = "manibharathi";
    $dbname = "newDB";

    $uName = $_POST['uname'];
    $pWord = $_POST['pword'];
    $response = array();
    try
    {
        $conn = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
            if($_POST['myId'] != "")
            {
                //UPDate
                $id = $_POST['myId'];
                $query = "UPDATE tbl_user set username = '".$uName."', password = '".$pWord."' WHERE id = '".$id ."'";
                
                $conn->exec($query);
                $response['success'] = 1;
                $response['uname'] = $uName;
                $response['pword'] = $pWord;
                echo json_encode($response);
            }
            else
            {
            
            // $query = "INSERT INTO tbl_user(username,password) VALUES ('management','admin@123')";
            $query = "INSERT INTO tbl_user(username,password) VALUES ('".$uName."','".$pWord."')";
            $conn->exec($query);
            $response['success'] = 1;
            $response['uname'] = $uName;
            $response['pword'] = $pWord;
            echo json_encode($response);
        }
        

            //{success:1,id:1}
            //echo "New row inserted";
    }
    catch(PDOException $e)
    {
        $response['success'] = 0;
        echo json_encode($response);
        //{success:0}
        //echo "Database Error ".$e->getMessage();
    }
    
?>