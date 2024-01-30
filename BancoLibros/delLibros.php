<?php
// conectamos con la base de datos
include("conexion.php");
// Borramos datos de la tabla libros 
$sql="DELETE FROM libros WHERE idlibro=$_GET[codigo]";
// Ejecutamos la sentencia de sql
mysqli_query($conexion,$sql) or die("Problemas en la consulta");
// Cerramos la conexión con la base de datos
mysqli_close($conexion);
// Redirigimos a la página lstlibros.php
header('Location:lstlibros.php');
?>