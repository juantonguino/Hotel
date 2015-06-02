<?php session_start();

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
			<th colspan="3"><i class="bus"></i> BUSCAR </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><label for="mail">Reserva:</label></td>
                        <td><input type="email" name="mail" required></td>
                        <td><h7><a href="reservas.php">Buscar</a></h7></td>
            
		</tr>
		<tr>
			<td><label for="con">Huesped:</label></td>
                        <td><input type="password" name="con" required></td>
                        <td><h7><a href="huespedes.php">Buscar</a></h7></td>
            
		</tr>
                <tr>
			<td><label for="con">Disponible:</label></td>
                        <td><input type="password" name="con" required></td>
                        <td><h7><a href="login.php">Buscar</a></h7></td>
            
		</tr>
                <tr>
			<td><label for="con">Tipo de Habitacion:</label></td>
                        <td><input type="password" name="con" required></td>
                        <td><h7><a href="login.php">Buscar</a></h7></td>
            
		</tr>
               
		<tr>
			<td colspan="3"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>