<?php

class ModeloGrafico {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function traerDatosGraficoCake() {
        $query = "SELECT candidato.cantidadVotosCandidato, candidato.nombre 
                  FROM corporacion, candidato 
                  WHERE corporacion.nombreCorporacion='Alcalde' 
                  AND candidato.idcorporacion=corporacion.idCorporacion 
                  AND candidato.postulacion='Manizales';";
        
        $arreglo = array();

        try {
            $consulta = $this->conexion->query($query);

            if ($consulta) {
                while ($fila = $consulta->fetch_assoc()) {
                    $arreglo[] = $fila;
                }

                return $arreglo;
            } else {
                throw new Exception("Error en la consulta: " . $this->conexion->error);
            }
        } catch (Exception $e) {
            // Manejo de errores: puedes registrar el error o devolver un valor específico según tus necesidades.
            error_log("Error en traerDatosGraficoCake: " . $e->getMessage());
            return false;
        }
    }
}

?>
