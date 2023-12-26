<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Open+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
  <link href="styles.css" rel="stylesheet"> 
  <title>Registro de usuario</title>
</head>
<body>
  
<main >
  <div class="contenedor">
    <div class="header"> 
      <h2>Registrate</h2>
    </div>
    
    <form class="formulario" method="post" autocomplete="off">
    
    <div class="form-control">
      <label class="label-formulario" for="Nombre">Nombre</label>
      <input type="text" name="name" placeholder="jose">
    </div>

    <div class="form-control">
      <label class="label-formulario" for="Email">Email</label>
      <input type="email" name="email" placeholder="jose@gmail.com">
    </div>
    
    <div class="form-control">
      <label class="label-formulario" for="Contraseña">Contraseña</label>
      <input type="password" name="password" placeholder="*******">
    </div>
    
    <input type="submit" name='send' class="btn" value="Enviar">

    <p>¿Ya tienes cuenta?<a class="enlace" href="login.php">Iniciar Sesión</a></p>
  
    </form>
  </div>
</main>

<?php
  include('send.php');
?>

</body>
</html>