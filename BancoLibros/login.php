<?php
    // Iniciamos el uso de variables de sesión
    session_start();
    /* Siempre que se ejecute una consulta a base de datos tenemos que tener un contenedor donde gurdar esos datos de la consulta*/
    // conectamos con la base de datos
    include("conexion.php");
    // Recogemos los datos del formulario
    $usuario = $_POST['f_usuario'];
    $claveform = $_POST['f_clave'];
    // Encriptamos la clave para compararla con la de la base de datos
    $clave = md5($claveform);
    // Consulta a la base de datos
    $sql = "SELECT * FROM usuarios WHERE idusuario = '$usuario' AND clave = '$clave'";
    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql");
    // Contamos el número de filas que devuelve la consulta
    $num = mysqli_num_rows($resultado);
    // Si el número de filas es 0, es que no existe el usuario
      
    if ($num == 0)
    {
        // Mostramos un mensaje de error
        echo "Usuario o contraseña incorrectos <br> <a href='inicio.php'>Volver</a>";
    }
    else
    {
        // Guardamos el nombre de usuario identificado en una variable de sesión llamada usuario para poder utilizarla en otras páginas
        $_SESSION['usuario'] = $_POST['f_usuario'];
        // Si el usuario y la contraseña son correctos, redirigimos a la página formLibros.php
        header("Location: menu.php");
    }
?>