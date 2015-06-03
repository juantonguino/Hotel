<?php session_start();
include_once '../mundo/Reserva.php';
include_once '../mundo/Hotel.php';
//$mundo=new Hotel();
$numero= $_GET['numero'];
$mundo= Hotel::get_isntancia();

if(isset($_POST['op']))
{
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $numeroDias=$_POST['numeroDias'];
    $fecha=$_POST['fecha'];
    $reserva= new Reserva($fecha, $nombre, $id, $numeroDias);
    $reserva->set_fecahaEstadia($fecha);
    $mundo->agregarReserva($numero, $reserva);
    header("Location:reservas.php?numero=$numero");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>HOTEL U-MARIANA</title>
  <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<form action="" method="POST">
<table>
	<thead>
		<tr>
			<th colspan="2"><i class="res"></i> AGREGAR RESERVA </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><label for="mail">ID Cliente:</label></td>
                        <td><input type="text" name="id" required></td>
		</tr>
                <tr>
			<td><label for="con">Nombre:</label></td>
                        <td><input type="text" name="nombre" required></td>
		</tr>
                <tr>
			<td><label for="con"># Dias:</label></td>
                        <td><input type="text" name="numeroDias" required></td>
		</tr>
                <tr>
			<td><label for="con">Fecha:</label></td>
                        <td><input type="date" name="fecha" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="op" value="Agregar Reserva"></td>
		</tr>
		<tr>
			<td colspan="2"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>

