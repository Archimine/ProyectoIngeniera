<?php
$mysqli = new mysqli("localhost", "root", "", "ingenieria");
$mysqli -> set_charset("utf8");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>