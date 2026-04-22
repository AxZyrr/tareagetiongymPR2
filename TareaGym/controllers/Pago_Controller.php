<?php
require_once '../models/Pago.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Captura de datos
    $miembro_id = $_POST['miembro_id'] ?? '';
    $plan_id    = $_POST['plan_id'] ?? '';
    $monto      = $_POST['monto'] ?? '';

    // Instanciamos el modelo
    $objPago = new Pago();

    $datos = [
        'miembro_id' => $miembro_id,
        'plan_id'    => $plan_id,
        'monto'      => $monto
    ];

    $ejecutar = $objPago->registrarPago($datos);

    if ($ejecutar) {
        $_SESSION['gym_pagos'][] = $datos;

        // Redirección limpia
        header("Location: ../views/index.php?status=success&msg=Pago_Registrado");
        exit();
    } else {
        // Si hay error, redirigir con error
        header("Location: ../views/Registrar_Pago.php?status=error");
        exit();
    }
}
