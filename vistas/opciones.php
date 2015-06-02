<?php 
session_start();
$numero=$_GET['numero'];
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
<table>
	<thead>
		<tr>
			<th colspan="3"> HOTEL U-MARIANA </th>
		</tr>
		<tr>
                    <td><a href="<?php echo "huespedes.php?numero=".$numero;?>"><img src="../img/huespedes.jpg" height="100" width="100"></a></td>
                    <td><a href="<?php echo "consumos.php?numero=".$numero;?>"><img src="../img/consumos.jpg" height="100" width="100"></a></td>
                    <td><a href="<?php echo "reservas.php?numero=".$numero;?>"><img src="../img/reservas.jpg" height="100" width="100"></a></td>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><a href="<?php echo "huespedes.php?numero=".$numero;?>">Huespedes</a></td>
                        <td><a href="<?php echo "consumos.php?numero=".$numero;?>">Consumos</a></td>
                        <td><a href="<?php echo "reservas.php?numero=".$numero;?>">Reservas</a></td>
		</tr>
		<tr>
                    <td colspan="3"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>
	</tbody>
</table>
</body>
</html>