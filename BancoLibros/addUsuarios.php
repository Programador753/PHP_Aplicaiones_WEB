<?php
// Conexion a la base de datos
include("conexion.php");
// Recogemos los datos del formulario
    $idusuario = $_POST['f_idusuario'];
    $nombrecompleto = $_POST['f_nombrecompleto'];
    $email = $_POST['f_email'];
    $movil = $_POST['f_movil'];
    $clave = $_POST['f_clave'];
// Encriptamos la clave
    $clave = password_hash($clave, PASSWORD_DEFAULT); 
// Consulta a la base de datos
    $sql = "INSERT INTO usuarios (idusuario, nombrecompleto, email, movil, clave) VALUES ('$idusuario', '$nombrecompleto', '$email', '$movil', '$clave')";
// Ejecutamos la consulta
    mysqli_query($conexion, $sql) or die("Error en la consulta: $sql");
// Redirigimos a la página de inicio
    header("Location: inicio.php");
?>