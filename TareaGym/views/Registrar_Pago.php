<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gimnasio - Registro de Pagos</title>
    <style>
        /* CSS para que no se vea 'horrible' */
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); width: 350px; }
        h2 { text-align: center; color: #333; margin-top: 0; }
        .input-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: 600; color: #555; }
        input, select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background-color: #28a745; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; font-weight: bold; margin-top: 10px; }
        button:hover { background-color: #218838; }
        .alert { padding: 10px; border-radius: 5px; text-align: center; margin-bottom: 15px; font-size: 14px; }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Registrar Pago</h2>
        
        <?php if(isset($_GET['res']) && $_GET['res'] == 'ok'): ?>
            <div class="alert success">✅ Pago procesado y Miembro activado</div>
        <?php endif; ?>

        <form action="../controllers/Pago_Controller.php" method="POST">
            <div class="input-group">
                <label>ID del Miembro:</label>
                <input type="number" name="miembro_id" required placeholder="Ej: 1">
            </div>
            <div class="input-group">
                <label>Seleccionar Plan:</label>
                <select name="plan_id">
                    <option value="1">Plan Mensual - $30</option>
                    <option value="2">Plan Trimestral - $80</option>
                    <option value="3">Plan Anual - $300</option>
                </select>
            </div>
            <div class="input-group">
                <label>Monto a cobrar:</label>
                <input type="number" name="monto" step="0.01" required placeholder="0.00">
            </div>
            <button type="submit">Guardar Transacción</button>
            <a href="index.php" class="link-volver">← Volver al Listado</a>
        </form>
    </div>
    <script>
    document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Detenemos el envío real por un momento
    
    const miembroId = document.querySelector('input[name="miembro_id"]').value;
    const monto = document.querySelector('input[name="monto"]').value;

    console.log("Iniciando simulación de transacción...");

    // Simulamos la lógica de la transacción
    if(miembroId > 0 && monto > 0) {
        alert("Simulando Transacción:\n1. Registrando pago...\n2. Activando miembro ID: " + miembroId + "\n\n¡Transacción Exitosa!");
        this.submit(); // Ahora sí lo enviamos al controlador.php
    } else {
        alert("Error en la transacción: Datos inválidos. Haciendo Rollback.");
    }
});
</script>
</body>
</html>