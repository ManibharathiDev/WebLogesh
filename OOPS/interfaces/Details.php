<?php
    include('Data.php');
    class Details implements Data
    {
        function getName()
        {
            echo "I am Kavin";
        }
        function getDetails(){
            echo "<br/>";
            echo "I am from India";
        }
    }
?>