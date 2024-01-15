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
<h1> Bienvenido a mi página en php </h1>
<?php
// Comentario de una línea
/* Comentario de varias líneas
*/

for($c=1;$c<=500;$c++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
{
  echo "<h1> $c Bienvenido a mi página en php </h1>";  
}
?>


<select id="edad" name="edad">
<?php
for($c=1;$c<=110;$c++) // Mientras C sea igual a 1, mientras C sea menor o igual a 10, incrementa C en 1
{
  echo "<option value='$c'>$c</option>";  
}
?>

</select>

 </body>
</html>