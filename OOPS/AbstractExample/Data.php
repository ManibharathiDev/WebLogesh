<?php
    abstract class Data
    {
        public $name = "Kavin";
        // Abstract contains abstract methods or non-abstract methods as well as we can use properties
        abstract function getName();
        function getDetails()
        {
                echo "I am in Abstract classes =>".$this->name;
        }
    }
?>