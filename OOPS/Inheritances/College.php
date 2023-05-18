<?php
    class College{
        var $collegeName;
        var $startedYear;

        function __construct($collegeName,$startedYear)
        {
            $this->collegeName = $collegeName;
            $this->startedYear = $startedYear;
        }

        function setCollegeName($collegeName)
        {
            $this->collegeName = $collegeName;
        }

        function setStartedYear($startedYear)
        {
            $this->startedYear = $startedYear;
        }

        function getCollegeName()
        {
            return $this->collegeName;
        }

        function getStartedYear()
        {
            return $this->startedYear;
        }

        final function printAllData()
        {
            echo "College Name is =>".$this->collegeName;
            echo "<br>";
            echo "Start Year =>".$this->startedYear;
        }

        
    }
?>