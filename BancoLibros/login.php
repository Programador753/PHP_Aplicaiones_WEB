<?php
    // Iniciamos el uso de variables de sesión
    session_start();
    /* Siempre que se ejecute una consulta a base de datos tenemos que tener un contenedor donde gurdar esos datos de la consulta*/
    // conectamos con la base de datos
    include("conexion.php");
    // Consultamos la base de datos
    $sql = "SELECT * FROM usuarios WHERE idusuario = '$_POST[f_usuario]' AND clave = '$_POST[f_clave]'";
    // Ejecutamos la consulta y guardamos el resultado en la variable $registros 
    $registros = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql");
    // Recuperamos el número de registros devueltos por la consulta
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