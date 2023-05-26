<?php
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','manibharathi');
    define('DBNAME','db_student');

    $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    spl_autoload_register(function($class){
        $classpath = '../modal/Student.php';
        require_once($classpath);
    });

    $student = new Student($db);
?>