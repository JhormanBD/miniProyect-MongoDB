<?php
        include('Libreria/motor.php');
        verificarSesion();
        include("plantilla.php");
?>
<div class="row">
  <div class="col col-sm-6">
    <form method="post" action="">
    <div class="input-group form-group">

      <span class="input-group-addon">Email:</span>
      <input type="text" name= "email" class= "form-control">

    </div>
    <div class="input-group form-group">

      <span class="input-group-addon">Nombre:</span>
      <input type="text" name= "nombre" class= "form-control">

    </div>

    <div class="input-group form-group">

      <span class="input-group-addon">Clave:</span>
      <input type="text" name= "clave" class= "form-control">

    </div>
    <div>
      <button class= "btn btn-primary" type="submit">Guardar</button>
    </div>

    </form>
  </div>
</div>
<table class= "table">
  <thead>
    <tr>
      <th>Email</th>
      <th>Clave</th>
    </tr>
  </thead>
  <tbody>

  </tbody>

</table>
