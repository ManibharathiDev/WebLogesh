<?php
     include('Data.php');
    class Student extends Data
    {
        function getName()
        {
            echo "I am from the Abstract class";
        }
    }
?>