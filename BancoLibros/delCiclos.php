<?php
// incluimos el archivo de conexion
include("conexion.php");
// Borramos datos de la tabla ciclos
$sql="DELETE FROM ciclos WHERE idciclo=$_GET[codigo]";
// Ejecutamos la sentencia de sql
mysqli_query($conexion,$sql) or die("Problemas en la consulta");
// Cerramos la conexión con la base de datos
mysqli_close($conexion);
// Redirigimos a la página lstCiclos.php
header('Location:lstCiclos.php');

?>