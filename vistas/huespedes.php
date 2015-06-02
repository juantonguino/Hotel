<?php session_start();
include_once '../mundo/Hotel.php';
//$mundo= new Hotel();
//$habitacion= new Habitacion();
//$huesped= new Huesped();
$numero= $_GET['numero'];
$mundo= Hotel::get_isntancia();
$habitacion=$mundo->buscarHabitacionPorNumero($numero);
$huespedes= $habitacion->get_huespedes();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>HOTEL U-MARIANA</title>
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="../scripts/script.js"></script> 
</head>
<body>
<table>
	<thead>
		<tr>
			<th colspan="8"><i class="hues"></i> HUESPEDES</th>
		</tr>
		<tr>
			<td colspan="8"><h6><a href="agregar_huesped.php">AGREGAR HUESPEDES</a></h6></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td>Edad</td>
                        <td>Identificacion</td>
                        <td>Direccion</td>
                        <td>Telefono</td>
                        <td># Noches</td>
		</tr>
	</thead>
	<tbody>
<?php for($i=0;$i<sizeof($huespedes);$i++){ $huesped= $huespedes[$i];?>
            <tr>
                <td><?php echo $huesped->get_nombre();?></td>
                <td><?php echo $huesped->get_edad();?></td>
                <td><?php echo $huesped->get_documentoIdentificacion();?></td>
                <td><?php echo $huesped->get_direccion();?></td>
                <td><?php echo $huesped->get_telefono();?></td>
                <td><?php echo $huesped->get_numeroNohes();?></td>
            </tr>
<?php }?>
		<tr>
			<td colspan="8"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>	
	</tbody>
        
</table>
</body>
</html>

