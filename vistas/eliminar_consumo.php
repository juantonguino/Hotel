<?php
session_start();
include_once '../mundo/Consumo.php';;
include_once '../mundo/Hotel.php';
$numero=$_GET['numero'];
$fecha=$_GET['fecha'];
$producto=$_GET['producto'];
$valor=$_GET['valor'];
$consumo= new Consumo($fecha, $producto, $valor);
//$mundo= new Hotel();
$mundo= Hotel::get_isntancia();
$mundo->eliminarConsumo($numero, $consumo);
header("Location:consumos.php?numero=$numero");
?>

