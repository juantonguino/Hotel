<?php session_start();
if(!isset($_SESSION['estado'])){
    header('Location:../index.php');
}
include_once '../mundo/Hotel.php';
//$mundo=new Hotel();
$mundo= Hotel::get_isntancia();
$listaHabitaciones=array();
if(isset($_POST['reserva'])){
    $campo=$_POST['campoReserva'];
    $listaHabitaciones=$mundo->buscarReserva($campo);
}
else if (isset($_POST['huesped'])){
    $campo=$_POST['campoHuesped'];
    $listaHabitaciones=$mundo->buscarHuesped($campo);
}
else if (isset($_POST['dispon'])){
    $campo=$_POST['campoD'];
    $listaHabitaciones=$mundo->buscarHabitacionPorDisponibilidad($campo);
}
else if (isset($_POST['tipoHab'])){
    $campo=$_POST['campoT'];
    $listaHabitaciones=$mundo->buscarHabitacionPorTipo($campo);
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
			<th colspan="6"><i class="bus"></i> BUSCAR </th>
		</tr>
	</thead>
	<tbody>
		<tr>
                    <td colspan="2"><label for="mail">Reserva:</label></td>
                    <td colspan="2"><input type="text" name="campoReserva"></td>
                    <td colspan="2"><input type="submit" name="reserva" value="Buscar"></td>
            
		</tr>
		<tr>
                    <td colspan="2"><label for="con">Huesped:</label></td>
                    <td colspan="2"><input type="text" name="campoHuesped"></td>
                    <td colspan="2"><input type="submit" name="huesped" value="Buscar"></td>
            
		</tr>
                <tr>
                    <td colspan="2"><label for="con">Disponibilidad:</label></td>
                    <td colspan="2"><input type="date" name="campoD"></td>
                    <td colspan="2"><input type="submit" name="dispon" value="Buscar"></td>
            
		</tr>
                <tr>
                    <td colspan="2"><label for="con">Tipo de Habitacion:</label></td>
                    <td colspan="2"><select name="campoT">
                            <option value="<?php echo Habitacion::TIPO_SENCILLA;?>">sencilla</option>
                            <option value="<?php echo Habitacion::TIPO_DOBLE;?>">doble</option>
                            <option value="<?php echo Habitacion::TIPO_TRIPLE;?>">triple</option>
                        </select></td>
                    <td colspan="2"><input type="submit" name="tipoHab" value="Buscar"></td>
            
		</tr>
               
		<tr>
			<td colspan="6"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>
	</tbody>
        <tfoot>
            <tr>
                <th colspan="6"><i class="lisbus"></i> Lista de Busqueda </th>
            </tr>
            <tr>
                
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
            </tr>
        </tfoot>
</table>
</form>
</body>
</html>