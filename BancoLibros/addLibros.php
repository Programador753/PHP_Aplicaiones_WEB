<?php
// conectamos con la base de datos
$conexion=mysqli_connect("localhost","root","","bancolibros") or die("Problemas en la conexion");

$sql="INSERT INTO libros (isbn, titulo, idmodulo, editorial, idusuario, precio, vendido, fechaalta, comentarios) VALUES ('$_POST[f_isbn]', '$_POST[f_titulo]', $_POST[f_idmodulo], $_POST[f_editorial], '$_POST[f_idusuario]', $_POST[f_precio], $_POST[f_vendido], '$_POST[f_fechaalta]', '$_POST[f_comentarios]')";

?>