<?php
// conectamos con la base de datos
include("conexion.php");
// insertamos los datos del formulario en la tabla libros
$sql="INSERT INTO libros (isbn, titulo, idmodulo, ideditorial, idusuario, precio, vendido, fechaalta, comentarios) VALUES ('$_POST[f_isbn]', '$_POST[f_titulo]', $_POST[f_idmodulo], $_POST[f_editorial], '$_POST[f_idusuario]', $_POST[f_precio], $_POST[f_vendido], '$_POST[f_fechaalta]', '$_POST[f_comentarios]')";

echo $sql;
// ejecutamos la sentencia de sql
mysqli_query($conexion,$sql) or die("Problemas en la consulta");
// cerramos la conexion
mysqli_close($conexion) or die("Problemas en la desconexion");
// Regresamos a la pagina principal formLibros.php
header("Location: formLibros.php");
?>