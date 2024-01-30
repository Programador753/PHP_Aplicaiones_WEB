<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>formEditoriales.php</title>
</head>
<body>
    <form action="addEditoriales.php" method="post"> <!-- Formulario para añadir editoriales -->
        <table align="center" width="80%"> <!-- Tabla para el formulario -->
            <tr>
            <td colspan="2"><h2>Formulario Editoriales</h2></td> <!-- Cabecera de la tabla -->
            </tr>
            <tr>
                <td>Editorial</td> <!-- Celda para el nombre de la editorial -->
                <td><input type="text" name="f_editorial" id="f_editorial" maxlength="50"></td>  <!-- Celda para el input de la editorial -->
            </tr>
            <tr>
                <td colspan="2" align="center"> <!-- Celda para el botón de enviar y volver al formulario de libros -->
                    <input type="submit" value="Enviar"> <!-- Botón de enviar -->
                    <a href="formLibros.php"><input type="button" value="Volver al formulario libros"></a> <!-- Botón de volver al formulario de libros -->
                </td>
            </tr>
        </table>
</body>
</html>