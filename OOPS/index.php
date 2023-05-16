<?php
    include('Student.php');
    echo "Constructor<br/>";
    $student_3 = new Student(12,"Raja","C","20ABCD");
    echo $student_3->getStuID();
    echo $student_3->printMyName();

?>