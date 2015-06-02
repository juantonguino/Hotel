<?php session_start();
include_once '../mundo/Hotel.php';
//$mundo= new Hotel();
//$habitacion= new Habitacion();
$reserva= new Reserva();
$numero= $_GET['numero'];
$mundo= Hotel::get_isntancia();
$habitacion=$mundo->buscarHabitacionPorNumero($numero);
$reservas= $habitacion->get_reservas();
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
			<th colspan="7"><i class="res"></i> RESERVAS</th>
		</tr>
		<tr>
                    <td colspan="7"><h6><a href="agregar_reserva.php">AGREGAR RESERVA</a></h6></td>
		</tr>
		<tr>
			<td>ID Cliente</td>
			<td>Fecha</td>
                        <td># Dias</td>
                        <td>Nombres</td>
		</tr>
	</thead>
	<tbody>
<?php for($i=0;$i<sizeof($reservas);$i++){ $reserva= $reservas[$i];?>
            <tr>
                <td><?php echo $reserva->get_numeroIdentificacion();?></td>
                <td><?php echo $reserva->get_fecahaEstadia();?></td>
                <td><?php echo $reserva->get_numeroDias();?></td>
                <td><?php echo $reserva->get_nombre();?></td>
            </tr>
<?php }?>
 	
		<tr>
			<td colspan="7"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>	
	</tbody>
        
</table>
</body>
</html>