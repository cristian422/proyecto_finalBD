<?php
include("conexion.php");
//obtener partidos politicos
if (isset($_POST['Corporacion'])) {
    $Corporacion = $_POST['Corporacion'];
    // Continuar con la consulta y la respuesta AJAX
    $query="SELECT nombrePartidoPolitico FROM partidopolitico,candidato WHERE partidopolitico.idPartidoPolitico=candidato.idPartidoPolitico AND candidato.idCorporacion='$Corporacion';";
    //$query = "SELECT partido.nombrePartido from partido, corporacion where corporacion.nombreCorporacion = '$Corporacion' and partido.idCorporacion = corporacion.idCorporacion;";
    $resultado = $conexion->query($query);
} else {
    echo "No se proporcionó el ID del municipio en la solicitud.";
}

while ($row = $resultado->fetch_assoc()) {
    echo "<option value='" . $row['nombrePartidoPolitico'] . "'>" . $row['nombrePartidoPolitico'] . "</option>";
}

$conexion->close();
/*

*/
?>