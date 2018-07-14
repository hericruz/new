<?php 
$id=$_GET["id"];
$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$tel =$_GET["telefono"];


 require ('abrir_conexion.php');
 $query = "UPDATE login SET user='$nombre', password='$apellidos', email='$tel' WHERE id=$id ";
 mysqli_query($conexion, $query);
echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=lista_usuarios.php'>";a

 ?>