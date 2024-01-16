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
    <br><br>
    <?php
      $imagen =array();
      $imagen[0]="./Imagenes/0.jpg";
      $imagen[1]="./Imagenes/1.jpg";
      $imagen[2]="./Imagenes/2.jpg";
      $imagen[3]="./Imagenes/3.jpg";
      $imagen[4]="./Imagenes/4.jpg";
      $imagen[5]="./Imagenes/5.jpg";
      $imagen[6]="./Imagenes/6.jpg";
      $imagen[7]="./Imagenes/7.jpg";
      $imagen[8]="./Imagenes/8.jpg";
      $imagen[9]="./Imagenes/9.jpg";
      echo "<table border='1' width='100%'><tr>";
      for($c=0;$c<=9;$c++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
      {
        echo "<td><img src='$imagen[$c]' width='100px'></td>";  
      }
      echo "</tr></table>";
    ?>
</body>

</html>