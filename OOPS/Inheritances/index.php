<?php
    include('Student.php');
    $stu1 = new Student("11MCA21","Rajaram","MCA");
    $stu1->setCollegeName("PSG Tech");
    $stu1->setStartedYear("1997");
    $stu1->printAllData();
    $stu1->printStudentData();

    echo "<br>";
    echo "-------------------------------------------";
    echo "<br>";

    $stu2 = new Student("11MCA22","Rajini","MCA");
    $stu2->setCollegeName("PSG Tech");
    $stu2->setStartedYear("1997");
    $stu2->printAllData();
    $stu2->printStudentData();

    
    
?>