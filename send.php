<?php

include('conexion.php');

if(isset($_POST['send'])) {
  
  if(
    strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['password']) >= 1 
  ) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $fecha = date('y/m/d');
    $Consulta = "INSERT INTO datos(nombre, correo, contraseña, fecha)
                 VALUES('$name', '$email', '$password', '$fecha')";
    $resultado = mysqli_query($conex, $Consulta);
    if($resultado) {
      ?>
        <h3 class='success'>Tu registro se ha completado</h3>
      <?php
    } else {
      ?>
        <h3 class='error'>Ocurrio un error</h3>
      <?php  
    }       
  } else {
    ?>
      <h3 class='error'>Llena todos los campos</h3>
    <?php  
  }
};

?>