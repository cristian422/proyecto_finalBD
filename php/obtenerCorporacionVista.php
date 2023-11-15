<?php
include("conexion.php");
$query = "SELECT corporacion.nombreCorporacion from corporacion;";
$resultado = $conexion->query($query);
while ($row = $resultado->fetch_assoc()) {
    echo "<option value='" . $row['nombreCorporacion'] . "'>" . $row['nombreCorporacion'] . "</option>";
}
?>