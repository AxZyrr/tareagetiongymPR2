<?php
class Pago {

    public function __construct() {
        // Constructor vacío para no intentar conectar a MySQL
    }

    public function registrarPago($datos) {
        // SIMULACIÓN DE TRANSACCIÓN
        
        try {
            // Iniciamos la "Transacción Lógica"
            $exito_paso_1 = false;
            $exito_paso_2 = false;

            // 1. Simular Insertar el pago
            if (!empty($datos['monto']) && $datos['monto'] > 0) {
                $exito_paso_1 = true; 
            }

            // 2. Simular Actualizar estado del miembro
            if (!empty($datos['miembro_id'])) {
                $exito_paso_2 = true;
            }

            // Lógica de COMMIT (Solo si ambos pasos son exitosos)
            if ($exito_paso_1 && $exito_paso_2) {
                // Aquí simularíamos el $this->db->commit();
                return true;
            } else {
                // Aquí simularíamos el $this->db->rollBack();
                return false;
            }

        } catch (Exception $e) {
            return false;
        }
    }

    public function mostrarRecibo(){
        
    }
}