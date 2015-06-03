<?php
session_start();
include_once '../mundo/Hotel.php';
$numero=$_GET['numero'];
$id=$_GET['id'];
//$mundo=new Hotel();
$mundo= Hotel::get_isntancia();
$mundo->eliminarHesped($numero, $id);
header("Location:huespedes.php?numero=$numero");

?>

