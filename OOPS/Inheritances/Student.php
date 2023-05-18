<?php
    include('College.php');
    class Student extends College{
        var $stuRollNumber;
        var $stuName;
        var $stuDept;


        //Function Overriding
        function printAllData()
        {
            echo "I am Child Class";
            //$this->printAllData();
        }

        function __construct($stuRollNumber,$stuName,$stuDept)
        {
            $this->stuRollNumber = $stuRollNumber;
            $this->stuName = $stuName;
            $this->stuDept = $stuDept;
        }

        function printStudentData()
        {
            echo "Name of the Student =>".$this->stuName;
            echo "<br>";
            echo "Roll Number =>".$this->stuRollNumber;
            echo "<br>";
            echo "Department =>".$this->stuDept;
        }
        
    }

    // $stu = new Student("11","Test","MCA");
    // $stu->printStudentData();
?>