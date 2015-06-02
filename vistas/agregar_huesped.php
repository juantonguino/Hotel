<?php session_start();
include_once '../mundo/Huesped.php';
include_once '../mundo/Hotel.php';
//$mundo=new Hotel();
$numero= $_GET['numero'];
$mundo= Hotel::get_isntancia();

if(isset($_POST['op']))
{
    $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];
    $id=$_POST['id'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $numeroNohes=$_POST['numeroNoches'];
    $fecha=$_POST['fechaIngreso'];
    $huesped=new Huesped($direccion, $id, $edad, $nombre, $numeroNohes, $telefono, $fecha);
    $mundo->agregarHuesped($numero, $huesped);
    header("Location:huespedes.php?numero=$numero");
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
			<th colspan="2"><i class="hues"></i> AGREGAR HUESPED </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><label for="mail">Nombre:</label></td>
                        <td><input type="text" name="nombre" required></td>
		</tr>
		<tr>
			<td><label for="con">Edad:</label></td>
                        <td><input type="text" name="edad" required></td>
		</tr>
                <tr>
			<td><label for="con">Identificacion:</label></td>
                        <td><input type="text" name="id" required></td>
		</tr>
                <tr>
			<td><label for="con">Direccion:</label></td>
                        <td><input type="text" name="direccion" required></td>
		</tr>
                <tr>
			<td><label for="con">Telefono:</label></td>
                        <td><input type="text" name="telefono" required></td>
		</tr>
                <tr>
			<td><label for="con"># Noches:</label></td>
                        <td><input type="text" name="numeroNoches" required></td>
		</tr>
                <tr>
			<td><label for="con">Fecha Ingreso:</label></td>
                        <td><input type="date" name="fechaIngreso" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="op" value="Agregar Huesped"></td>
		</tr>
		<tr>
			<td colspan="2"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>

