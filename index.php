<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hotel</title>
    </head>
    <body>
        <?php
            include 'mundo/Hotel.php';
            $mundo= Hotel::get_isntancia();
            echo 'cambio ojeda';
        ?>
    </body>
</html>