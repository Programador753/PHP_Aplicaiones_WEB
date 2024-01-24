<?php
// conectamos con la base de datos
include("conexion.php");
// insertamos los datos del formulario en la tabla libros
$sql="INSERT INTO libros (isbn, titulo, idmodulo, ideditorial, idusuario, precio, vendido, fechaalta, comentarios) VALUES ('$_POST[f_isbn]', '$_POST[f_titulo]', $_POST[f_idmodulo], $_POST[f_editorial], '$_POST[f_idusuario]', $_POST[f_precio], $_POST[f_vendido], '$_POST[f_fechaalta]', '$_POST[f_comentarios]')";

//echo "$sql";
// ejecutamos la sentencia de sql
mysqli_query($conexion,$sql) or die("Problemas en la consulta $sql");
// cerramos la conexion
mysqli_close($conexion) or die("Problemas en la desconexion");
// Regresamos a la pagina principal formLibros.php
header("Location: formLibros.php") or die("Problemas en volver a la pagina principal");

/*
Estructura de una consulta de insercion de datos en una tabla
INSERT INTO nombre de la tabla (nombre de los campos de la tabla separados por comas) VALUES (valores de los campos de la tabla separados por comas);

$_POST[f_nombre del campo del formulario] -> El $_POST es un array que recoge los datos del formulario y el f_nombre del campo del formulario es el nombre del campo del formulario que recoge los datos del formulario.
En los $_POST solo los campos de tipo numerico no llevan comillas pero el resto de campos si llevan comillas.

VALUES -> Es una palabra reservada de sql que indica que a continuacion van los valores de los campos de la tabla.

mysqli_query($conexion,$sql) -> Es una funcion de php que ejecuta la sentencia de sql en la base de datos que esta conectada con la variable $conexion y la sentencia de sql esta en la variable $sql.

Una forma de comprobar donde esta el error es ejecutar la sentencia de sql y si nos da error copiamos el sql que ha generado y lo ejecutamos en el phpmyadmin y nos dara el error que tenemos en la sentencia de sql.
*/
?>