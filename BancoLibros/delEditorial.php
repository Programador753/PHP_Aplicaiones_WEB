<?php
// incluimos el archivo de conexión
include "conexion.php";
// Recogemos el id de la editorial a borrar
$codigo = $_GET['codigo'];
// Consulta a la base de datos
$sql = "DELETE FROM editorial WHERE ideditorial=$codigo";
// Ejecutamos la consulta
mysqli_query($conexion, $sql) or die("Error en la consulta: $sql");
// Redirigimos a la página de inicio
header("Location: lstEditorial.php");
// Cerramos la conexión
mysqli_close($conexion);


?>