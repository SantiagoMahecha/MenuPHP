<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Post" >
     Ingrese el primer numero: <br>
     <input type="text" name="numero1">
      <br><br>
     Ingrese el segundo numero:<br>
     <input type="text" name="numero2">
      <br><br>
    <input type="submit" value="Multiplicar"><br><br>
   </form>
  </body>
</html>
<?php
  $total;
  $total = $_REQUEST['numero1']*$_REQUEST['numero2'];
 
 echo "<br><hr> El total de la multiplicacion es: ".$total;