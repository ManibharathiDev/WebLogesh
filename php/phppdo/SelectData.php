<?php
    $server = "localhost";
    $username="root";
    $password = "manibharathi";
    $dbname = "newDB";

    try
    {
        
            $conn = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
            $query = "SELECT * FROM tbl_user";
            $stmts = $conn->prepare($query);
            $stmts->execute();
            $stmts->setFetchMode(PDO::FETCH_ASSOC);
            //Association Array
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>";
            echo "User Name";
            echo "</td>";
            echo "<td>";
            echo "Password";
            echo "</td>";
            echo "</tr>";
            while ($row = $stmts->fetch()) 
            {
                echo "<tr>";
                echo "<td>";
                echo $row['username'];
                echo "</td>";
                echo "<td>";
                echo $row['password'];
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
    }
    catch(PDOException $e)
    {
        echo "Database Error ".$e->getMessage();
    }
?>