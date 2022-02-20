<?php
    include "conexion.php";
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $validacion = $_POST['suspende'];
    $fecha = date('Y-m-d');
    
    $query = "SELECT * FROM estudiantes WHERE nombres = '$nombres' AND apellidos = '$apellidos'";
    $consulta = mysqli_query($mysqli, $query);
    $datos=mysqli_fetch_array($consulta);
    

    if(isset($datos)){
        header('info.php');
    }

    $id = $datos['id'];

    $con1 = "UPDATE estudiantes SET Suspende = '$validacion' WHERE id = $id";
    mysqli_query($mysqli, $con1);

    if($validacion == "Si"){
        $con2 = "UPDATE estudiantes SET desde = '$fecha' WHERE id = $id";
        mysqli_query($mysqli, $con2);
    }elseif($validacion == "No"){
        $con2 = "UPDATE estudiantes SET desde = NULL WHERE id = $id";
        mysqli_query($mysqli, $con2);
    }
    
    header("Location: info.php")

    
?>
