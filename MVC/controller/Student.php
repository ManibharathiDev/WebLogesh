<?php
    include('../includes/config.php');
    $flag = $_GET['flag'];
    if($flag == 1)
    {
        $result = $student->getAllStudent();
        echo $result;
    }
?>