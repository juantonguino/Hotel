<?php
session_start();
$id=$_GET['id'];
for($i=$id;$i<=$_SESSION['cont'];$i++)
{
   $_SESSION['email'][$i]=$_SESSION['email'][$i+1];
   $_SESSION['contra'][$i]=$_SESSION['contra'][$i+1];
}
$_SESSION['cont']--;
header("Location:reservas.php")

?>

