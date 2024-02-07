<?php
// incluimos el archivo de conexion
include("conexion.php");
// Borramos datos de la tabla modulos
$sql="DELETE FROM modulos WHERE idmodulo=$_GET[codigo]";
// Ejecutamos la sentencia de sql
mysqli_query($conexion,$sql) or die("Problemas en la consulta");
// Cerramos la conexión con la base de datos
mysqli_close($conexion);
// Redirigimos a la página lstModulos.php
header('Location:lstModulos.php');

?>