<?php
include("conexion.php");
//obtener e14 por mesa
if (isset($_POST['idMesaVotacion'])) {
    $idMesaVotacion = $_POST['idMesaVotacion'];
    // Continuar con la consulta y la respuesta AJAX
    $query = "SELECT corporacion.nombreCorporacion from e14pormesas, e14, corporacion where e14pormesas.idMesaVotacion = $idMesaVotacion and e14pormesas.idE14 = e14.idE14 and e14.idCorporacion = corporacion.idCorporacion;";
    echo '<label>' . $idMesaVotacion . '</label><br>';;
    
    $resultado = $conexion->query($query);
} else {
    echo "No se proporcionó el ID del municipio en la solicitud.";
}
while ($row = $resultado->fetch_assoc()) {
    echo "<option value='" . $row['nombreCorporacion'] . "'>" . $row['nombreCorporacion'] . "</option>";
}





/*
if (isset($_POST['idMesaVotacion'])) {
    $idMesaVotacion = $_POST['idMesaVotacion'];
    // Continuar con la consulta y la respuesta AJAX
    $query = "SELECT idE14 FROM e14pormesas ";
    $resultado = $conexion->query($query);
} else {
    echo "No se proporcionó el ID del municipio en la solicitud.";
}
while ($row = $resultado->fetch_assoc()) {
    
    echo '<label>' . $row['idE14'] . '</label><br>';
}
*/
?>
