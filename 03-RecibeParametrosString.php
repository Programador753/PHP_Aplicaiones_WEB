<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>03-RecibeParametrosString.php</title>
</head>
<body>
    <?php
        echo "El usuario es : $_GET[usuario] y el curso es: $_GET[curso] y la clase es: $_GET[clase]";
    ?>
    <br><br>
    <?php
        echo "El usuario es: ".$_GET['usuario']."<br>";
        echo "El curso es: ".$_GET['curso']."<br>";
        echo "La clase es: ".$_GET['clase']."<br>";
        echo "<a href='03-EnvioParametrosString.php'>Volver</a>";
    ?>
</body>
</html>