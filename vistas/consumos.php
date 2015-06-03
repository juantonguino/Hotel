<?php session_start();
include_once '../mundo/Hotel.php';
//$mundo= new Hotel();
//$habitacion= new Habitacion();
//$consumo= new Consumo();
$numero= $_GET['numero'];
$mundo= Hotel::get_isntancia();
$habitacion=$mundo->buscarHabitacionPorNumero($numero);
$consumos=$habitacion->get_consumos();
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
			<th colspan="4"><i class="cons"></i> CONSUMOS</th>
		</tr>
		<tr>
                    <td colspan="4"><h6><a href="<?php echo "agregar_consumo.php?numero=".$numero;?>">AGREGAR CONSUMOS</a></h6></td>
		</tr>
		<tr>
			<td><h8><a></a>Fecha</h8></td>
                        <td><h8><a></a>Producto</h8></td>
			<td><h8><a></a>Valor</h8></td>
		</tr>
	</thead>
	<tbody>
<?php for($i=0;$i<sizeof($consumos);$i++){ $consumo= $consumos[$i];?>
            <tr>
                <td><?php echo $consumo->get_fecha();?></td>
                <td><?php echo $consumo->get_producto();?></td>
                <td><?php echo $consumo->get_valor();?></td>
                <td><a href="#" onclick="confirmarCon(<?php echo $numero;?>, <?php echo $consumo->get_fecha();?>, <?php echo $consumo->get_producto();?>, <?php echo $consumo->get_valor();?>)"> X </a></td>
            </tr>
<?php }?>
		<tr>
			<td colspan="4"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>	
	</tbody>
        
</table>
</body>
</html>

