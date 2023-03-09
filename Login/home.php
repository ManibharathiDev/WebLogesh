<?php
    session_start();
    if(!isset($_SESSION['USER_NAME']))
        header('location:login.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h2>Home</h2>
        <h2>Welcome 
        <?php
             echo $_SESSION['USER_NAME']
        ?>   
    </h2>
    <a href="logout.php">Logout</a>
    </body>
</html>