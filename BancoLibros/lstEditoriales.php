<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>lstEditorial.php</title>
</head>
<body>
    <?php
    // conectamos con la base de datos
    include("conexion.php");
    ?>
    <table border="1" align="center" width="100%" cellspacing="2">
        <tr>
            <td colspan="3" align="center"><h2>Formulario de alta de editoriales</h2></td>
        </tr>
        <tr>
            <td align="center"><h3>Id</h3></td>
            <td align="center"><h3>Editorial</h3></td>
            <td align="center"><h3>Eliminar</h3></td>
        </tr>
    <?php
        // Recuperamos los datos de la tabla editoriales y los mostramos en una tabla
        $sql="SELECT * FROM editorial ORDER BY ideditorial";
        // Ejecutamos la sentencia de sql
        $registros=mysqli_query($conexion,$sql) or die("Problemas en la consulta");
        // Mientras haya datos en la tabla los mostramos en la página web en una tabla
        while($line=mysqli_fetch_array($registros))  
        {
            echo "<tr align='center'>"; // Abrimos fila
            echo "<td align='justify'><strong>$line[ideditorial]</strong></td>"; // Mostramos el id de la editorial en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='justify'><strong>$line[editorial]</strong></td>"; // Mostramos el nombre de la editorial en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='center'><a href='delEditorial.php?codigo=$line[ideditorial]'><img src='./Imagenes/basura.png' width='30' height='30'></a></td>"; // Mostramos un enlace para eliminar la editorial
            echo "</tr>"; // Cerramos fila
        }

    ?>
    <td colspan="3" align="center">
        <a href="menu.php"><input type="button" value="Volver al menú"></a>
    </td>
    </table>
</body>
</html>
