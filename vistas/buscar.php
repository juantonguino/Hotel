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
			<th colspan="6"><i class="bus"></i> BUSCAR </th>
		</tr>
	</thead>
	<tbody>
		<tr>
                    <td colspan="2"><label for="mail">Reserva:</label></td>
                    <td colspan="2"><input type="text" name="mail" ></td>
                    <td colspan="2"><input type="submit" name="reserva" value="Buscar"></td>
            
		</tr>
		<tr>
                    <td colspan="2"><label for="con">Huesped:</label></td>
                    <td colspan="2"><input type="text" name="con" ></td>
                    <td colspan="2"><input type="submit" name="huesped" value="Buscar"></td>
            
		</tr>
                <tr>
                    <td colspan="2"><label for="con">Disponibilidad:</label></td>
                    <td colspan="2"><input type="date" name="con" ></td>
                    <td colspan="2"><input type="submit" name="dispon" value="Buscar"></td>
            
		</tr>
                <tr>
                    <td colspan="2"><label for="con">Tipo de Habitacion:</label></td>
                    <td colspan="2"><input type="text" name="con" ></td>
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
            </tr>
            <tr>
                
            </tr>
        </tfoot>
</table>
</form>
</body>
</html>