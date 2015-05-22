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
            include 'datos/ConsumoDAO.php';
            include 'mundo/Consumo.php';
            $consumoDAO=new ConsumoDAO();
            $consumo= $consumoDAO->seleccionar(101);
        ?>
    </body>
</html>
