<?php
//conexion a la base de datos

$conexion = mysqli_connect("localhost", "root", "", "sistema de informacion");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
//echo 'Conexión exitosa';



?>
