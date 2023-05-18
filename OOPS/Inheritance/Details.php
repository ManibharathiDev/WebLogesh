<?php

    class Details{
        var $name = "Akash";
        private $age = 25;

        final public function printMyData()
        {
            echo "Name is ".$this->name;
            echo " Age is ".$this->age;
        }
    }
?>