<?php include "templates/inicio.php"; ?>
<?php include "conexion.php";?>


<div class="container">
    <div class="row blanco">
        <h1 class="subtitulos">Datos de los estudiantes:</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Dan</th>
                    <th scope="col">Suspende</th>
                    <th scope="col">Desde</th>
                </tr>
            </thead>

            <tbody>
                 <?php
                    $consulta = "SELECT * FROM estudiantes";
                    $resultado = mysqli_query($mysqli, $consulta);
                    $contador = 1;
                    while($datos=mysqli_fetch_array($resultado)){ 
                        echo "<tr><th>".$datos["id"]."</th><td>".$datos["nombres"]."</td>"."<td>".$datos["apellidos"]."</td>"."<td>".$datos["edad"]."</td><td>".$datos["dan"]."</td><td>".$datos["Suspende"]."</td><td>".$datos["desde"]."</td></tr>";
                        $contador = $contador + 1;
                    } 
                ?>
            </tbody>


        </table> 
    </div>
</div>

<?php include "templates/final.php"; ?>