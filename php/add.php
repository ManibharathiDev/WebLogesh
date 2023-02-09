<?php
    //echo "I am Available!";

    // $first = $_POST['firstNumber'];
    // $second = $_POST['secondNumber'];

    // $first = $_GET['firstNumber'];
    // $second = $_GET['secondNumber'];


    // $first = $_REQUEST['firstNumber'];
    // $second = $_REQUEST['secondNumber'];

    //$_REQUEST - Accept both Get and Post 

    if(isset($_POST['myNumber']))
    {
            $first = $_POST['myNumber'];
            echo $first;
    }

    if(isset($_GET['myNumber']))
    {
            $first = $_GET['myNumber'];
            echo $first;
    }

    //echo "The Result is ".$first+$second;

    // Check if the params available or not

?>