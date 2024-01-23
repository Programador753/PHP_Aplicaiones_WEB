<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>formLibros.php</title>
</head>

<body>
    <form action="addLibros.php" method="post">
        <table align="center" width="80%">
            <tr>
                <td colspan="2"><h2>Banco de Libros</h2></td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td><input type="text" name="f_isbn" id="f_isbn" maxlength="17"></td>
            </tr>
            <tr>
                <td>Titulo</td>
                <td><input type="text" name="f_titulo" id="f_titulo" maxlength="50"></td>
            </tr>
            <tr>
                <td>Módulo</td>
                <td>
                    <select name="f_idmodulo" id="f_idmodulo"></select>
                    <option value="1">Ingles</option>
                    <option value="2">Aplicaciones Web</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Editorial</td>
                <td>
                    <select name="f_editorial" id="f_editorial">
                        <option value="1">Paraninfo</option>
                        <option value="2">MacGrawHill</option>
                        <option value="3">Santillana</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>Usuario</td>
                <td>
                    <select name="f_idusuario" id="f_idusuario" required>
                        <option value=""></option>
                        <option value="Antonio">Antonio</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><input type="number" name="f_precio" id="f_precio"></td>
            </tr>
            <tr>
                <td>Vendido</td>
                <td>
                    <select name="f_vendido" id="f_vendido"></select>
                    <option value="0">No</option>
                    <option value="1">Si</option>
                </td>
            </tr>
            <tr>
                <td>Fecha Alta</td>
                <td><input type="date" name="f_fechaalta" id="f_fechaalta"></td>
            </tr>
            <tr>
                <td>Comentarios</td>
                <td>
                    <textarea name="f_comentarios" id="f_comentarios" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>