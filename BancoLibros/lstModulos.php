<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>lstModulos.php</title>
</head>
<body>
    <?php
    // conectamos con la base de datos
    include("conexion.php");
    ?>
    <table border="1" align="center" width="100%" cellspacing="2">
        <tr>
            <td colspan="2" align="center"><h2>Formulario de alta de modulos</h2></td>
        </tr>
        <tr>
            <td><h3>Id</h3></td>
            <td><h3>Modulo</h3></td>
            <td><h3>Ciclo</h3></td>
            <td></td>
        </tr>
    <?php
        // Recuperamos los datos de la tabla modulos y los mostramos en una tabla
        $sql="SELECT * FROM modulos ORDER BY idmodulo";
        // Ejecutamos la sentencia de sql
        $registros=mysqli_query($conexion,$sql) or die("Problemas en la consulta");
        // Mientras haya datos en la tabla los mostramos en la página web en una tabla
        while($line=mysqli_fetch_array($registros))  
        {
            echo "<tr align='center'>"; // Abrimos fila
            echo "<td align='justify'><strong>$line[idmodulo]</strong></td>"; // Mostramos el id del modulo en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='justify'><strong>$line[modulo]</strong></td>"; // Mostramos el nombre del modulo en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='justify'><strong>$line[idciclo]</strong></td>"; // Mostramos el id del ciclo en una celda de la tabla con negrita y centrado en la celda
            echo "<td align='center'><a href='delModulos.php?codigo=$line[idmodulo]'><img src='./Imagenes/basura.png' width='30' height='30'></a></td>"; // Mostramos un enlace para eliminar el modulo
            echo "</tr>"; // Cerramos fila
        }

    ?>
</body>
</html>
