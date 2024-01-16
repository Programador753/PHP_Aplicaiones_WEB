<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>01-Basico.php</title>
</head>

<body>
<?php
// http://localhost/PHP_Aplicaiones_WEB/ -> Ruta de la página web en el servidor local
// Comentario de una línea
/* Comentario de varias líneas
*/
?>
    <h1> Bienvenido a mi página en php </h1>
    
    <?php
      for($c=1;$c<=10;$c++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
      {
        echo "<h1> $c Bienvenido a mi página en php </h1>";  
      }
    ?>
  <select id="edad" name="edad">
        <?php
          for($c=1;$c<=500;$c++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
          {
            echo "<option value='$c'>$c</option>";  
          }
        ?>
  </select>
  <br><br>
    <table border="1">
        <tr>
            <?php
              for($c=1;$c<=10;$c++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
              {
                echo "<td> $c </td>";  
              }
            ?>
        </tr>
    </table>
    <br><br>
    <table border="1">
            <?php
              for($c=1;$c<=10;$c++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
              {
                echo "<tr><td>$c </td></tr>";  
              }
            ?>
    </table>
    <br><br>
    <table border="1" width="100%">
            <?php
              for($f=1;$f<=3;$f++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
              {
                echo "<tr>";
                for($c=1;$c<=4;$c++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
                {
                  echo "<td>$c</td>";  
                }
                echo "</tr>";
              }
            ?>
    </table>
</body>

</html>