<?php session_start();
if(isset($_POST['op']))
	{
		$mail=strtolower($_POST['mail']);
		$contra=$_POST['con'];
		$con=$_SESSION['cont'];
		$_SESSION['email'][$con]=$mail;
		$_SESSION['contra'][$con]=$contra;
		$_SESSION['cont']++;
		header("Location:login.php");
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
			<th colspan="2"><i class="fa fa-user"></i> AGREGAR RESERVA </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><label for="mail">ID Cliente:</label></td>
                        <td><input type="email" name="mail" required></td>
		</tr>
		<tr>
			<td><label for="con">Fecha:</label></td>
                        <td><input type="password" name="con" required></td>
		</tr>
                <tr>
			<td><label for="con"># Dias:</label></td>
                        <td><input type="password" name="con" required></td>
		</tr>
                <tr>
			<td><label for="con">Tipo Habitacion:</label></td>
                        <td><input type="password" name="con" required></td>
		</tr>
                <tr>
			<td><label for="con">Habitacion:</label></td>
                        <td><input type="password" name="con" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="op" value="Agregar Reserva"></td>
		</tr>
		<tr>
			<td colspan="2"><h6><a href="login.php">Regresar</a></h6></td>
		</tr>
	</tbody>
</table>
</form>
</body>
</html>

