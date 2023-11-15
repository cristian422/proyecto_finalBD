<?php
//conexion a la base de datos
include("conexion.php");
// verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
//obtener puestos de votacion
if (isset($_POST['idCentroVotacion'])) {
    $idCentroVotacion = $_POST['idCentroVotacion'];
    // Continuar con la consulta y la respuesta AJAX
    $query = "SELECT idMesaVotacion,numeroMesa FROM mesavotacion WHERE idCentroVotacion = '$idCentroVotacion'";
    $resultado = $conexion->query($query);
} else {
    echo "No se proporcionó el ID del municipio en la solicitud.";
}
while ($row = $resultado->fetch_assoc()) {
    echo "<option value='" . $row['idMesaVotacion'] . "'>" . $row['numeroMesa'] . "</option>";
}
//onterner mesas de votacion
    

$conexion->close();

?>