<?php session_start();
include_once '../mundo/Hotel.php';
//$mundo= new Hotel();
//$habitacion= new Habitacion();
//$reserva= new Reserva();
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
			<th colspan="6"><i class="res"></i> RESERVAS</th>
		</tr>
		<tr>
                    <td colspan="6"><h6><a href="<?php echo "agregar_reserva.php?numero=".$numero;?>">AGREGAR RESERVA</a></h6></td>
		</tr>
		<tr>
			<td><h8><a></a>ID Cliente</h8></td>
			<td><h8><a></a>Fecha</h8></td>
                        <td><h8><a></a># Dias</h8></td>
                        <td><h8><a></a>Nombres</h8></td>
		</tr>
	</thead>
	<tbody>
<?php for($i=0;$i<sizeof($reservas);$i++){ $reserva= $reservas[$i];?>
            <tr>
                <td><?php echo $reserva->get_numeroIdentificacion();?></td>
                <td><?php echo $reserva->get_fecahaEstadia();?></td>
                <td><?php echo $reserva->get_numeroDias();?></td>
                <td><?php echo $reserva->get_nombre();?></td>                
                <td><a href="#" onclick="confirmarRes(<?php echo $numero?>,'<?php echo $reserva->get_fecahaEstadia();?>','<?php echo $reserva->get_nombre();?>',<?php echo $reserva->get_numeroIdentificacion();?>,<?php echo $reserva->get_numeroDias();?>)"> X </a></td>
            </tr>
<?php }?>
 	
	<tr>
                <td></td>
            </tr>
            <tr>
                <td colspan="8"><h9><a href="<?php echo "opciones.php?numero=".$habitacion->get_numero();?>">Regresar</a></h9></td>
            
            </tr>	
            <tr>
			<td colspan="6"><h6><a href="login.php">HABITACIONES</a></h6></td>
		</tr>	
	</tbody>
        
</table>
</body>
</html>