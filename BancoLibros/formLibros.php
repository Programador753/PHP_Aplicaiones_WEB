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
    <?php
    // Iniciamos el uso de variables de sesión
    session_start();
    /* Siempre que se ejecute una consulta a base de datos tenemos que tener un contenedor donde gurdar esos datos de la consulta*/
    // conectamos con la base de datos
    include("conexion.php");
    ?>
    <form action="addLibros.php" method="post">
        <table align="center" width="80%">
            <tr>
                <td colspan="2" align="center"><h2>Banco de Libros</h2></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    Usuario: 
                        <?php
                        // Mostramos el nombre de usuario identificado en la variable de sesión usuario
                        echo $_SESSION['usuario'];
                        ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                <a href="logout.php"><input type="button" value="Cerrar Sesión"></a>
                </td>
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
                    <select name="f_idmodulo" id="f_idmodulo">
                        <option value="">
                                <?php
                                // Recuperamos los datos de la tabla modulo
                                $sql="SELECT * FROM modulos, ciclos WHERE modulos.idciclo=ciclos.idciclo";
                                // Ejecutamos la sentencia de sql
                                $registros=mysqli_query($conexion,$sql) or die("Problemas en la consulta");
                                while($line=mysqli_fetch_array($registros)) // Mientras haya datos en la tabla los mostramos, en este caso los guardamos en un array para poder mostrarlos en el select
                                {
                                    echo "<option value='$line[idmodulo]'>$line[modulo] ($line[ciclo])";
                                }
                                ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Editorial</td>
                <td>
                    <select name="f_editorial" id="f_editorial">
                        <option value="">
                                <?php
                                // Recuperamos los datos de la tabla editorial
                                $sql="SELECT * FROM editorial";
                                // Ejecutamos la sentencia de sql
                                $registros=mysqli_query($conexion,$sql) or die("Problemas en la consulta");
                                while($line=mysqli_fetch_array($registros)) // Mientras haya datos en la tabla los mostramos, en este caso los guardamos en un array para poder mostrarlos en el select
                                {
                                    echo "<option value='$line[ideditorial]'>$line[editorial]";
                                }
                                ?>
                    </select> 
                </td>
            </tr>
           
            <tr>
                <td>Precio</td>
                <td><input type="number" step="0.01" name="f_precio" id="f_precio"></td>
            </tr>
            <tr>
                <td>Vendido</td>
                <td>
                    <select name="f_vendido" id="f_vendido">
                    <option value="0">No
                    <option value="1">Si
                    </select>
                </td>
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
                    <a href="lstlibros.php"><input type="button" value="Lista de Libros "></a> 
                    <a href="formEditoriales.php"><input type="button" value="Formulario Editoriales"></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>