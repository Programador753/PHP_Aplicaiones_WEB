<?php
// conectamos con la base de datos
include("conexion.php");
// insertamos los datos del formulario en la tabla editoriales
$sql="INSERT INTO editorial (editorial) VALUES ('$_POST[f_editorial]')";
//echo "$sql";
// ejecutamos la sentencia de sql
mysqli_query($conexion,$sql) or die("Problemas en la consulta $sql");
// cerramos la conexion
mysqli_close($conexion) or die("Problemas en la desconexion");
// Regresamos a la pagina principal formEditoriales.php
header("Location: formEditoriales.php") or die("Problemas en volver a la pagina principal");
/*
Estructura de una consulta de insercion de datos en una tabla
INSERT INTO nombre de la tabla (nombre de los campos de la tabla separados por comas) VALUES (valores de los campos de la tabla separados por comas);
*/
?>