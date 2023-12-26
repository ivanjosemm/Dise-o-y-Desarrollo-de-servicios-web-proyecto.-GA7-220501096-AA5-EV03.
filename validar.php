<?php

  include('db.php');

  $EMAIL = $_POST['email'];
  $PASSWORD = $_POST['password'];

  $consulta = " SELECT * FROM `datos` WHERE correo = '$EMAIL' AND 
                                        contraseña = '$PASSWORD' ";
  $resultado = mysqli_query($conexion, $consulta);
  $filas = mysqli_num_rows($resultado);

  if($filas) {
    header("location:home.html");
  }else{
    include("login.php");
    ?>
      <h3 class="error">Error de autenticación</h3>
    <?php   
  }

  mysqli_free_result($resultado);
  mysqli_close($conexion);
?>