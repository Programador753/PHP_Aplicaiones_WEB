<?php
// conectamos con la base de datos
$conexion=mysqli_connect("localhost","root","","bancolibros") or die("Problemas en la conexion");
/*
localhost _> Servidor al que nos conectamos
root -> Usuario de la base de datos
"" -> Contraseña del usuario de la base de datos
bancolibros -> Nombre de la base de datos

Mediante este archivo nos conectamos a la base de datos y asi solo tenemos que modificar este archivo si cambiamos de servidor o de usuario de la base de datos o de contraseña o de nombre de la base de datos y no tenemos que modificar todos los archivos que se conectan a la base de datos.

*/
?>