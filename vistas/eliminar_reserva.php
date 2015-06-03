<?php
session_start();
include_once '../mundo/Reserva.php';
include_once '../mundo/Hotel.php';
$numero=$_GET['numero'];
$fecha=$_GET['fecha'];
$nombre=$_GET['nombre'];
$id=$_GET['id'];
$dias=$_GET['dias'];
$reserva= new Reserva($fecha, $nombre, $id, $dias);
$reserva->set_fecahaEstadia($fecha);
//$mundo= new Hotel();
$mundo= Hotel::get_isntancia();
$mundo->eliminarReserva($numero, $reserva);
header("Location:reservas.php?numero=$numero");

?>

