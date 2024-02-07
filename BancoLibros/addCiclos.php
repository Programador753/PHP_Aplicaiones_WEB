<?php
// incluimos el archivo de conexión
include "conexion.php";
// Recogemos los datos del formulario
$ciclo = $_POST['f_ciclo'];
// Consulta a la base de datos
$sql = "INSERT INTO ciclos (ciclo) VALUES ('$ciclo')";
// Ejecutamos la consulta
mysqli_query($conexion, $sql) or die("Error en la consulta: $sql");
// Redirigimos a la página de inicio
header("Location: inicio.php");
// Cerramos la conexión
mysqli_close($conexion);

?>