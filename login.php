<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Open+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
  <link href="styles2.css" rel="stylesheet"> 
  <title>Validar usuario</title>
</head>
<body>
  
<main >
  <div class="contenedor">
    <div class="header"> 
      <h2>Iniciar sesión</h2>
    </div>
    
    <form class="formulario" method="post" action='validar.php'>
    
    <div class="form-control">
      <label class="label-formulario" for="Email">Email</label>
      <input type="email" name="email" placeholder="jose@gmail.com">
    </div>
    
    <div class="form-control">
      <label class="label-formulario" for="Contraseña">Contraseña</label>
      <input type="password" name="password" placeholder="*******">
    </div>
    
    <input type="submit" class="btn" value="Ingresar">

    <p>¿Ya tienes cuenta?<a class="enlace" href="registro.php">Registrate</a></p>
  
    </form>
  </div>
</main>

</body>
</html>