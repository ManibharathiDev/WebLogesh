<?php
    include('Details.php');
    class SubDetails extends Details
    {
        function printData()
        {
            $this->printMyDatas();
        }

        function printMyDatas()
        {
            echo "This is from Child";
        }
    }
?>