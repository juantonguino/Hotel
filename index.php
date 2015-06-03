<?php

include_once 'datos/UsuariosDAO.php';;
$usuarioDAO =new UsuariosDAO();
$error="&nbsp;";
if(isset($_POST['op']))
{
    $mail=$_POST['mail'];
    $contra=$_POST['con'];
    
    $verificacion=$usuarioDAO->verificarUsuarioRegistrado($mail, $contra);
    if($verificacion == 1)
    {                     
        session_start();
        $_SESSION['estado']=true;
        header('Location:vistas/login.php');
    }
    else
    {
        $error="* Usuario no autorizado!";
    }	
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOTEL U-MARIANA</title>
        <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    </head>
    <body>
         
         <div class="container">
  <div id="login-form">
    <h3><i class="fa fa-user fa-2x"></i> AUTENTICACION</h3>
    <fieldset>

      <form action="" method="POST">
          <input name="mail" type="text" required placeholder="Usuario">
        <input name="con" type="password" required  placeholder="Contraseña">
        <input type="submit" name="op" value="Entrar">
        <footer class="clearfix">            
          <p><span class="info">¿</span><a href="#">Olvid&oacute; su contrase&ntilde;a?</a></p>
		  <p style="color:red;"><?php echo $error;?></p>
          
        </footer>
      </form>
    </fieldset>
  </div> <!-- end login-form -->
</div>
    </body>
</html>