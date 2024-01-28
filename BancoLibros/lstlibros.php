<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>lstlibros.php</title>
</head>

<body>
    <?php
    // conectamos con la base de datos
    include("conexion.php");
    ?>
    <table border="1" align="center" width="100%" cellspacing="2">
        <tr>
            <td colspan="9" align="center"><h2>Listado de libros</h2></td>
        </tr>
        <tr>
            <td><h3>ISBN</h3></td>
            <td><h3>Titulo</h3></td>
            <td><h3>Módulo</h3></td>
            <td><h3>Editorial</h3></td> 
            <td><h3>Usuario</h3></td>
            <td><h3>Precio</h3></td>
            <td><h3>Vendido</h3></td>
            <td><h3>Fecha de alta</h3></td>
            <td><h3>Comentarios</h3></td> 
        </tr>
    <?php
        // Recuperamos los datos de la tabla libros y los mostramos en una tabla
        $sql="SELECT * FROM libros, modulos, editorial, usuarios WHERE libros.idmodulo=modulos.idmodulo AND libros.ideditorial=editorial.ideditorial AND libros.idusuario=usuarios.idusuario ";
        // Ejecutamos la sentencia de sql
        $registros=mysqli_query($conexion,$sql) or die("Problemas en la consulta");
        // Mientras haya datos en la tabla los mostramos en la página web en una tabla
        while($line=mysqli_fetch_array($registros))  
        {
            echo "<tr align='center'>"; // Abrimos fila
            echo "<td align='justify'><strong>$line[isbn]</strong></td>"; // Mostramos el isbn del libro en una celda de la tabla con negrita y centrado en la celda 
            echo "<td align='justify'><strong>$line[titulo]</strong></td>"; // Mostramos el titulo del libro en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='justify'><strong>$line[modulo]</strong></td>"; // Mostramos el modulo al que pertenece el libro en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='justify'><strong>$line[editorial]</strong></td>"; // Mostramos la editorial del libro en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='justify'><strong>$line[nombrecompleto]</strong></td>"; // Mostramos el usuario que ha añadido el libro en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='justify'><strong>$line[precio]€</strong></td>"; // Mostramos el precio del libro en una celda de la tabla con negrita y centrado en la celda
            { 
                echo "<td align='center'><strong>"; // Abrimos celda
                    if ($line['vendido'] == 1) // Si el valor de la columna vendido es 1 mostramos SI en negrita y centrado en la celda
                    {
                        echo 'SI';
                    } 
                    elseif ($line['vendido'] == 0) // Si el valor de la columna vendido es 0 mostramos NO en negrita y centrado en la celda
                    {
                        echo 'NO'; 
                    }
                echo "</strong></td>";// Cerramos celda para mostrar el valor de la columna vendido en la tabla con negrita y centrado en la celda
            } 
            echo "<td align='justify'><strong>$line[fechaAlta]</strong></td>"; // Mostramos la fecha de alta del libro en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='justify'><strong>$line[comentarios]</strong></td>"; // Mostramos los comentarios del libro en una celda de la tabla con negrita y centrado en la celda
            echo "</tr>"; // Cerramos fila
        }
        
    ?>
    <tr> <!-- Abrimos fila --> 
        <td colspan="9" align="center"><a href='formLibros.php' align="center"><input type='button' value='Volver al formulario para añadir libros'></a></td> <!-- Creamos un botón para volver al formulario de añadir libros -->
    </tr> <!-- Cerramos fila -->
    </table> <!-- Cerramos tabla -->
</body>
</html>
