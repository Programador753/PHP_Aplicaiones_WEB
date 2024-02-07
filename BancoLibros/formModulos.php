<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>formModulos.php</title>
</head>
<body>
    <?php
    // Iniciamos el uso de variables de sesión
    session_start();
    /* Siempre que se ejecute una consulta a base de datos tenemos que tener un contenedor donde gurdar esos datos de la consulta*/
    // conectamos con la base de datos
    include("conexion.php");
    ?>
    <form action="addModulos.php" method="post">
        <table align="center" width="80%">
            <tr>
                <td colspan="2" align="center"><h2>Formulario Modulos</h2></td>
            <tr>
                <td>Módulo</td>
                <td><input type="text" name="f_modulo" id="f_modulo" maxlength="50"></td>
            </tr>
            <tr>
                <td>Ciclo</td>
                <td>
                    <select name="f_idciclo" id="f_idciclo">
                        <option value="">
                                <?php
                                // Recuperamos los datos de la tabla ciclo
                                $sql="SELECT * FROM ciclos";
                                // Ejecutamos la sentencia de sql
                                $registros=mysqli_query($conexion,$sql) or die("Problemas en la consulta");
                                while($line=mysqli_fetch_array($registros)) // Mientras haya datos en la tabla los mostramos, en este caso los guardamos en un array para poder mostrarlos en el select
                                {
                                    echo "<option value='$line[idciclo]'>$line[ciclo]";
                                }
                                ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar">
                    <a href="lstModulos.php"><input type="button" value="Listado de modulos"></a>
                    <a href="menu.php"><input type="button" value="Menú principal"></a>
                </td>
            </tr>
        </table>
</body>
</html>