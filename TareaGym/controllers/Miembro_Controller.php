<?php

require_once '../models/Persona.php';
require_once '../models/Miembro.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // 1. Captura de datos desde el formulario
    $cedula   = $_POST['cedula'] ?? '';
    $nombres  = $_POST['nombres'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $email    = $_POST['email'] ?? '';

    // 2. Validación simple
    if (empty($cedula) || empty($nombres)) {
        header("Location: ../views/Registrar_Miembro.php?error=campos_vacios");
        exit();
    }

    // 3. Instanciación del objeto (Aplicando POO)
    $nuevoMiembro = new Miembro($cedula, $nombres, $telefono, $email);

    // 4. Persistencia temporal en Sesión
    if (!isset($_SESSION['gym_miembros'])) {
        $_SESSION['gym_miembros'] = [];
    }

    $_SESSION['gym_miembros'][] = $nuevoMiembro;

    // 5. Redirección al listado principal con mensaje de éxito
    header("Location: ../views/index.php?status=success&msg=Miembro Registrado Correctamente");
    exit();
} else {
    // Si alguien intenta entrar al controlador por URL, lo regresamos
    header("Location: ../views/Registrar_Miembro.php");
    exit();
}
