<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>formUsuarios.php</title>
</head>
<body>
    <form action="addUsuarios.php" method="post"> <!-- Formulario para añadir usuarios -->
        <table align="center" width="40%"> <!-- Tabla para el formulario -->
            <tr align="center">
                <td colspan="2"><h2>Formulario para añadir nuevos usuarios</h2></td> <!-- Cabecera de la tabla -->
            </tr>
            <tr>
                <td> idusuario: </td> <!-- Celda para el id del usuario -->
                <td> <input type="text" name="f_idusuario" id="f_idusuario"  maxlength="9"></td> <!-- Celda para el input del id del usuario -->
            </tr>
            <tr>
                <td> nombre completo: </td> <!-- Celda para el nombre completo del usuario -->
                <td> <input type="text" name="f_nombrecompleto" id="f_nombrecompleto"  maxlength="40"></td> <!-- Celda para el input del nombre completo del usuario -->
            </tr>
            <tr>
                <td> Email: </td> <!-- Celda para el email del usuario -->
                <td> <input type="text" name="f_email" id="f_email" maxlength="60"></td> <!-- Celda para el input del email del usuario -->
            </tr>
            <tr>
                <td> Móvil: </td> <!-- Celda para el móvil del usuario -->
                <td> <input type="text" name="f_movil" id="f_movil" maxlength="13"></td> <!-- Celda para el input del móvil del usuario -->
            </tr>
            <tr>
                <td> Clave: </td> <!-- Celda para la clave del usuario -->
                <td> <input type="password" name="f_clave" id="f_clave" maxlength="16"></td> <!-- Celda para el input de la clave del usuario -->
            </tr>
            <tr>
                <td>
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <!-- Celda para el botón de enviar y volver al inicio -->
                    <input type="submit" value="Enviar"> <!-- Botón de enviar -->
                    <a href="Inicio.php"><input type="button" value="Volver al inicio"></a> <!-- Botón de volver al inicio -->
                    <a href="lstUsuarios.php"><input type="button" value="Listado de usuarios"></a> <!-- Botón de ir al listado de usuarios -->
                </td>
        </table>  
    </form>
</body>
</html>
    