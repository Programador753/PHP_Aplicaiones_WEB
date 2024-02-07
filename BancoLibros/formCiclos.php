<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>formCiclos.php</title>
</head>

<body>
<form action="addCiclos.php" method="post">
    <table align="center" width="80%">
        <tr>
            <td colspan="2"><h2>Formulario Ciclos</h2></td>
        </tr>
        <tr>
            <td>Ciclo</td>
            <td><input type="text" name="f_ciclo" id="f_ciclo" maxlength="50"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Enviar">
                <a href="formLibros.php"><input type="button" value="Volver al formulario libros"></a>
                <a href="lstCiclos.php"><input type="button" value="Listado de ciclos"></a>
                <a href="menu.php"><input type="button" value="Menú principal"></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>