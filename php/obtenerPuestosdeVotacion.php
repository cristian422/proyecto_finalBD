<?php
//conexion a la base de datos
include("conexion.php");
// verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_POST['idMunicipio'])) {
    $idMunicipio = $_POST['idMunicipio'];
    // Continuar con la consulta y la respuesta AJAX
    $query = "SELECT idCentroVotacion,nombreCentroVotacion FROM centrovotacion WHERE idMunicipio = '$idMunicipio'";
    $resultado = $conexion->query($query);
} else {
    echo "No se proporcionó el ID del municipio en la solicitud.";
}

while ($row = $resultado->fetch_assoc()) {
    echo "<option value='" . $row['idCentroVotacion'] . "'>" . $row['nombreCentroVotacion'] . "</option>";
}

$conexion->close();
?>
