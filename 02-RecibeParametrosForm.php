<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>02-RecibeParametrosForm.php</title>
</head>
<body>
    <?php
        echo "El usuario es $_POST[usu] y la contraseña es $_POST[cla] <br>";
        echo "<a href='02-EnvioParametrosForm.php'>Volver</a>";
    ?>
    <br><br>
    <?php
        $usuario = $_POST['usu'];
        $clave = $_POST['cla'];
        echo "El usuario es $usuario y la contraseña es $clave <br>";
        echo "<a href='02-EnvioParametrosForm.php'>Volver</a>";
    ?>
</body> 
</html>