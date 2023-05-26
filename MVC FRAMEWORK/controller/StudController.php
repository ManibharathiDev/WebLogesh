<?php
    include('../includes/config.php');
    //Flag == 1 Get Data
    //Flag == 2 Insert Data
    //Flag == 3 Update Data
    //Flag == 4 Delete Data

    $flag = $_GET['flag'];

    if($flag == 1)
    {
        
        $result = $student->getAllData();
        echo $result;
    }
?>