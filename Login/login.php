<?php
    session_start();
    if(isset($_SESSION['USER_NAME']))
        header('location:home.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <form method="post" action="checkLogin.php">
            <table>
                <tr>
                    <td>User Name</td>
                    <td>:</td>
                    <td><input type="text" name="userName"/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="passWord"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login"> </td>
                    <td><input type="reset" value="Reset"> </td>
                </tr>
            </table>
        </form>
    </body>
</html>