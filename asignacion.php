<?php
    include "conexion.php";
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $dan = $_POST['dan'];

    if( $edad <= 70 && $dan = 10){
        $dan_verdadero = "decimo";
    }elseif($edad <= 60 && $dan = 9){
        $dan_verdadero = "noveno";
    }elseif($edad <= 51 && $dan = 8){
        $dan_verdadero = "octavo";
    }elseif($edad <= 43 && $dan = 7){
        $dan_verdadero = "septimo";
    }elseif($edad <= 36 && $dan = 6){
        $dan_verdadero = "sexto";
    }elseif($edad <= 30 && $dan = 5){
        $dan_verdadero = "quitno";
    }elseif($edad <= 25 && $dan = 4){
        $dan_verdadero = "cuarto";
    }elseif($edad <= 21 && $dan = 3){
        $dan_verdadero = "tercero";
    }elseif($edad <= 18 && $dan = 2){
        $dan_verdadero = "segundo";
    }elseif($edad <= 16 && $dan = 1){
        $dan_verdadero = "primero";
    }elseif($edad <= 12 && $dan = 1){
        $dan_verdadero = "cinturon negro";
    }else{
        $dan_verdadero = "no asignado";
    }

    $query = "INSERT INTO estudiantes(nombres, apellidos, edad, dan) VALUES ('$nombres', '$apellidos', $edad, '$dan_verdadero')";
    mysqli_query($mysqli, $query);
    header("info.php");   