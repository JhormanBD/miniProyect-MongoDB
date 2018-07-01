<?php
      include("plantilla.php");
?>

    <div class="row">
      <div class="col col-sm-6">
        <form method="post" action="">
        <div class="input-group form-group">

          <span class="input-group-addon">Matrícula:</span>
          <input type="text" name= "matricula" class= "form-control">

        </div>
        <div class="input-group form-group">

          <span class="input-group-addon">Marca:</span>
          <select class="form-control" name="marca" ></select>

        </div>
        <div class="input-group form-group">

          <span class="input-group-addon">Modelo:</span>
          <select class="form-control" name="modelo" ></select>

        </div>
        <div class="input-group form-group">

          <span class="input-group-addon">Transmisión:  </span>
          <div class="form-control">
            <label><input type="radio" name= "transmision" value="AT"/> AT</label>
            <label><input type="radio" name= "transmision" value="MC"/> MC</label>
          </div>

        </div>
        <div class="input-group form-group">
          <span class="input-group-addon">Comentarios: </span>
          <textarea name="comentario" class= "form-control"></textarea>
        </div>
        <div>
          <button class= "btn btn-primary" type="submit">Guardar</button>
        </div>
        </form>
      </div>
    </div>

    <fieldset>
       <legend>Vehículos Agregados</legend>
       <table class="table">
         <thead>
           <tr>
             <th>Matricula</th>
             <th>Marca</th>
             <th>Modelo</th>
             <th>Transmisión</th>
             <th>Comentario</th>
             <td></td>
           </tr>
         </thead>
         <tbody>

         </tbody>
       </table>
    </fieldset>
