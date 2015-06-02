<?php session_start();
include_once '../mundo/Hotel.php';
include_once '../mundo/Consumo.php';
//$mundo=new Hotel();
$numero= $_GET['numero'];
$mundo= Hotel::get_isntancia();

if(isset($_POST['op']))
{
    $fecha=$_POST['fecha'];
    $producto=$_POST['producto'];
    $valor=$_POST['valor'];
    $consumo=new Consumo($fecha, $producto, $valor);
    $mundo->agregarConsumo($numero, $consumo);
    echo $fecha;
    echo $producto;
    echo $valor;
    header("Location:consumos.php?numero=$numero");
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
			<th colspan="2"><i class="cons"></i> AGREGAR CONSUMO </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><label for="con">Producto:</label></td>
                        <td><input type="text" name="producto" required></td>
		</tr>
                <tr>
			<td><label for="con">Valor:</label></td>
                        <td><input type="text" name="valor" required></td>
		</tr>
               <tr>
			<td><label for="mail">Fecha:</label></td>
                        <td><input type="date" name="fecha" required></td>
		</tr> 
		<tr>
			<td colspan="2"><input type="submit" name="op" value="Agregar Consumo"></td>
		</tr>
		<tr>
			<td colspan="2"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>

