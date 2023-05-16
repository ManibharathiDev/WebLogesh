<?php
    class Student
    {
        var $stuID;
        var $name;
        var $division;
        var $rollNumber;

        function printMyName()
        {
            echo "I am From the Student";
        }

        function __construct($stuId,$name,$division,$rollNumber)
        {
            //echo "I am Construtor";
           $this->stuID = $stuId;
            $this->name = $name;
            $this->division = $division;
            $this->rollNumber = $rollNumber;
        }

        function setNumber($id)
        {
            $this->stuID = $id;
        }

        function getStuID()
        {
            return $this->stuID;
        }

        function setName($name)
        {
            $this->name = $name;
        }

        function getName()
        {
            return $this->name;
        }

    }

    /*$student = new Student();
    //$student->stuID = 10;
    $student->setNumber(10);
    //$student->name = "Antony";
    $student->setName("Antony");
    $student->division = "A";
    $student->rollNumber = "10A123";
    echo "First Student Information<br/>";
   // echo "Student Id=>".$student->stuID;
   echo "Student Id=>".$student->getStuID();
    echo "<br/>";
    //echo "Student Name=>".$student->name;
    echo "Student Name=>".$student->getName();
    echo "<br/>";
    echo "Student Division=>".$student->division;
    echo "<br/>";
    echo "Student rollNumber=>".$student->rollNumber;
    echo "<br/>";
    echo "---------------------------------------------";
    echo "<br/>";
    $student_2 = new Student();
    $student_2->stuID = 15;
    $student_2->name = "Jack";
    $student_2->division = "B";
    $student_2->rollNumber = "20A123";
    echo "Second Student Information<br/>";
    echo "Student Id=>".$student_2->stuID;
    echo "<br/>";
    echo "Student Name=>".$student_2->name;
    echo "<br/>";
    echo "Student Division=>".$student_2->division;
    echo "<br/>";
    echo "Student rollNumber=>".$student_2->rollNumber;
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";*/
    // echo "Constructor<br/>";
    // $student_3 = new Student(12,"Raja","C","20ABCD");
    // echo $student_3->getStuID();
?>