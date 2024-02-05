<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>inicio.php</title>
</head>
<body>
    <form action="login.php" method="post"> <!-- Se envía el formulario a login.php -->
        <table align="center" width="40%"> <!-- Se crea una tabla para el formulario -->
            <tr>    
                <td>Usuario</td>  
                <td><input type="text" name="f_usuario" id="f_usuario" maxlength="9"></td> 
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="password" name="f_clave" id="f_clave" maxlength="16"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Acceder"> <!-- Se crea un botón para enviar el formulario -->
                    <input type="button" value="Registrar" onclick="window.open('formUsuarios.php','_parent'">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>