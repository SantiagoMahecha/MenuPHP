<?php
session_start();

// Si el usuario ya está logueado, lo redirigimos al dashboard
if(isset($_SESSION['username'])) {
  header("Location: actividad_2.php");
  exit;
}

// Si se envió el formulario
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['Bryan'];
  $password = $_POST['1013'];

  // Validamos la contraseña
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);

  if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
    $error = "La contraseña debe tener al menos 8 caracteres, una letra mayúscula, una letra minúscula y un número";
  } else {
    // Comparamos el nombre de usuario y contraseña con los datos predefinidos
    if($username === 'usuario' && $password === 'Password123') {
      $_SESSION['username'] = $username;
      header("Location: actividad_1.php");
      exit;
    } else {
      $error = "Nombre de usuario o contraseña incorrectos";
    }
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
</head>
<body>
  <?php if(isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>

  <form action="actividad_2.php"method="post">
    <label>
      Nombre de usuario:
      <input type="text" name="username">
    </label>
    <br>
    <label>
      Contraseña:
      <input type="password" name="password">
    </label>
    <br>
    <button type="submit">Iniciar sesión</button>
  </form>
</body>
</html>

