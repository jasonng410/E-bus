<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_GET["msg"])){
            echo '<h1>'.$_GET["msg"].'</h1>';
        }
        echo phpversion();
        
        ?>
        <form action = "userController.php" method = "post">
        <input type="hidden"  name="action" value="login">
        Name: <input type = "text" name = "fname">
        <input type = "submit" value="Submit">
        </form>
    </body>
</html>
