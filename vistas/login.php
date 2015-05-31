<?php session_start();

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
			<th colspan="6"><i class="fa fa-user"></i>HABITACIONES</th>
		</tr>
		<tr>
                    <td colspan="6"><h6><a href="agregar_habitacion.php">AGREGAR HABITACIONES</a></h6></td>
		</tr>
		<tr>
			<td>Numero</td>
			<td>Estado</td>
                        <td>Tipo</td>
                        <td>Precio</td>
                        <td>Total</td>                        
		</tr>
	</thead>
	<tbody>	
 		<tr>
			<td colspan="6"><h6><a href="logout.php">Salir</a></h6></td>
		</tr>	
                <tr>
                    
                </tr>
                
	</tbody>
</table>
</body>
<footer>
    <?php include './caja.php';?>
</footer>
</html>