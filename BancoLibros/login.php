<?php
    // Iniciamos el uso de variables de sesión
    session_start();
    /* Siempre que se ejecute una consulta a base de datos tenemos que tener un contenedor donde gurdar esos datos de la consulta*/
    // conectamos con la base de datos
    include("conexion.php");
    // Recupperamos la contraseña hasheada de la base de datos y la imprimimospor pantalla
    $sql = "SELECT clave FROM usuarios WHERE idusuario = '$_POST[f_usuario]'";
    // Ejecutamos la consulta a la base de datos y guardamos el resultado en la variable $result 
    $result = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql");
    // Guardamos el resultado de la consulta en un array asociativo llamado $row 
    $row = mysqli_fetch_assoc($result);

    // Comparamos la contraseña hasheada de la base de datos con la contraseña introducida por el usuario
    $sql = "SELECT * FROM usuarios WHERE idusuario = '$_POST[f_usuario]' AND clave = '$row[clave]'";
    // Ejecutamos la consulta a la base de datos y guardamos el resultado en la variable $registros
    $registros = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql");
    // Guardamos el número de registros encontrados en la variable $num
    $num = mysqli_num_rows($registros);
    // Si el número de registros es mayor que 0, es decir, si se ha encontrado algún registro
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
        header("Location: formLibros.php");
    }
?>