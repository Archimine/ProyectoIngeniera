<?php
    include "templates/inicio.php";
    include "conexion.php";
?>
<div class="container">
  <div class="row">
      <form action="asignacion.php" method = "POST">
        <div class="form-group row padding-final">
            <label for="inputuser" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputuser" name="nombres" placeholder="Nombres">
            </div>
        </div>
        <div class="form-group row padding-final">
            <label for="apellidos" class="col-sm-2 col-form-label">Apellidos:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
            </div>
        </div>
        <div class="form-group row padding-final">
            <label for="age" class="col-sm-2 col-form-label">Edad:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="age" name="edad" placeholder="Edad">
            </div>
        </div>
        <div class="form-group row padding-final">
            <label for="dan" class="col-sm-2 col-form-label">Tiempo en su dan:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="dan" name="dan" placeholder="Tiempo en su dan">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Enviar datos</button>
            </div>
        </div>
      </form>
  </div>
</div>


<?php
    include "templates/final.php";
?>