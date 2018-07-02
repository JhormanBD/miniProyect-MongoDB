<?php

      include('Libreria/motor.php');
      $mensaje = "";
      if ($_POST) {
        if(verificarUsuario($_POST)){
          echo "<script>window.location= './' </script>";
          exit();
        }else{
            $mensaje = "Usuario o clave no validos";

        }


      }

      include("plantilla.php");

?>
<form action="index.html" method="post">


<div id="divLogin">
  <div class="form-group input-group">
      <span class="input-group-addon">Email:</span>
      <input type="text" name="email" class="form-control">
  </div>
  <div class="form-group input-group">
      <span class="input-group-addon">Clave:</span>
      <input type="password" name="clave" class="form-control">
  </div>
  <div class="error">
     <?php echo $mensaje; ?>
  </div>
  <div class="form-group input-group">
    <button class="btn btn-success" type="submit" name="button">Entrar</button>
  </div>
</div>
</form>
