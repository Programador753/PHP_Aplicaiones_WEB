<?php
// incluimos el archivo de conexion
include("conexion.php");
// insertamos los datos del formulario en la tabla modulos
$sql="INSERT INTO modulos (modulo,idciclo) VALUES ('$_POST[f_modulo]','$_POST[f_idciclo]')";
// ejecutamos la sentencia de sql
mysqli_query($conexion,$sql) or die("Problemas en la consulta $sql");
// cerramos la conexion
mysqli_close($conexion) or die("Problemas en la desconexion");
// Regresamos a la pagina principal formModulos.php
header("Location: formModulos.php") or die("Problemas en volver a la pagina principal");


?>