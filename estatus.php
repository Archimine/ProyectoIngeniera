<?php include "templates/inicio.php"; ?>
<?php include "conexion.php";?>


<div class="container">
    <div class="row padding-final">
        <form action="validacion.php" method="POST">
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
            <label for="inputState" class="col-sm-2 col-form-label">Suspende:</label>
            <div class="col-sm-10">
                <select id="inputState" class="form-control" name="suspende">
                    <option value="Si" selected>Si</option>
                    <option value="No">No</option>
                </select>
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

<?php include "templates/final.php"; ?>