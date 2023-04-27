<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="Post">
            <h1>Formulario Usuario</h1>
            <input type="text" name="Nombre" id="" placeholder="Nombre Usuario"><br><br>
            <input type="text" name="Telefono" id="" placeholder="Telefono Usuario"><br><br>
            <input type="text" name="Email" id="" placeholder="Email Usuario"><br><br>
            <input type="text" name="Direccion" id="" placeholder="Direccion Usuario"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </div>
</body>
</html>

 <?php
$nombre = $_POST['Nombre'];
$telefono = $_POST['Telefono'];
$email = $_POST['Email'];
$direccion = $_POST['Direccion'];

echo "<br><hr><h1>Datos</h1>
<table>
<tr>
<td>Nombre</td>
<td>Telefono</td>
<td>Email</td>
<td>Direccion</td>
</tr>
<tr>
<td>".$nombre."</td>
<td>".$telefono."</td>
<td>".$email."</td>
<td>".$direccion."</td>
</tr>
</table>";