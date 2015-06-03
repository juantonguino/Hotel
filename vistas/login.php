<?php session_start();
if(!isset($_SESSION['estado'])){
    header('Location:../index.php');
}
 include_once '../mundo/Hotel.php';
//$mundo= new Hotel();
$mundo= Hotel::get_isntancia();
$listaHabitaciones=$mundo->get_habitaciones();
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
			<th colspan="6"><i class="hab"></i>HABITACIONES</th>
		</tr>
		<tr>
                <td BGCOLOR="#D8D8D8" colspan="6"><h10>Total de Dinero Recaudado: <?php echo $mundo->get_caja()->get_valorRecaudado();?></h10></td>
            </tr>
            <tr>
                <td BGCOLOR="#D8D8D8" colspan="6"><h10>Total de Dinero Pendiente: <?php echo $mundo->get_caja()->get_valorPendiente();?></10></td>
            </tr>
                <tr>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td colspan="6"><h9><a href="buscar.php">Buscar</a></h9></td>
                </tr>
                <tr>
                    <td colspan="6"></td>
                </tr>
		<tr>                        
                    <td><h8><a></a>Numero</h8></td>
                    <td><h8><a></a>Estado</h8></td>
		    <td><h8><a></a>tipo</h8></td>
                    <td><h8><a></a>Precio</h8></td>
                    <td><h8><a></a>Total</h8></td> 
                    <td><h8><a></a>Opciones</h8></td> 
		</tr>
                <tr>
                    <td colspan="6"></td>
                </tr>
	</thead>
	<tbody>
<?php for($i=0;$i<sizeof($listaHabitaciones);$i++){ $habitacion=$listaHabitaciones[$i];?>
            <tr>
                <td><?php echo $habitacion->get_numero();?></td>
                <td><?php echo $habitacion->get_estado()?></td>
                <td><?php echo $habitacion->get_tipo();?></td>
                <td><?php echo $habitacion->get_precioPorNoche()?></td>
                <td><?php echo $habitacion->get_totalValorConsumo();?></td>
                <td colspan="6"><h7><a href="<?php echo "opciones.php?numero=".$habitacion->get_numero();?>">Opciones</a></h7></td>
            </tr>
<?php } ?>
            
            <tr>
                <td colspan="6"><h6><a href="logout.php">Salir</a></h6></td>
            </tr>
                            
	</tbody>
</table>
</body>
</html>