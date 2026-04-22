<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Miembros - Zona Gym</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h3 {
            margin-top: 0;
            color: #333;
            text-align: center;
            border-bottom: 2px solid #28a745;
            padding-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-submit {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-submit:hover {
            background: #0056b3;
        }

        .link-volver {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #666;
            font-size: 14px;
        }

        .link-volver:hover {
            color: #333;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <!-- El action apunta al controlador que creamos -->
        <form action="../controllers/Miembro_Controller.php" method="POST" id="formRegistro">
            <h3>Nuevo Miembro</h3>

            <label for="cedula">Cédula</label>
            <input type="number" id="cedula" name="cedula" placeholder="Ej: 12345678" required>

            <label for="nombres">Nombres Completos</label>
            <input type="text" id="nombres" name="nombres" placeholder="Ej: Juan Perez" required>

            <label for="telefono">Teléfono</label>
            <input type="number" id="telefono" name="telefono" placeholder="Ej: 04121234567" required>

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" placeholder="juan@gmail.com" required>

            <button type="submit" class="btn-submit">Registrar y Crear Objeto</button>
            <a href="index.php" class="link-volver">← Volver al Listado</a>
        </form>
    </div>

    <script>
        document.getElementById('formRegistro').addEventListener('submit', function(e) {
            e.preventDefault(); // Pausamos el envío para la simulación

            const nombre = document.getElementById('nombres').value;
            const cedula = document.getElementById('cedula').value;

            // Simulación de pasos de POO (Trayecto II)
            console.log("Iniciando proceso de instanciación...");

            const mensajeSimulacion = 
                "PROCESO POO INICIADO:\n" +
                "1. Validando datos de Persona...\n" +
                "2. Heredando atributos en clase Miembro (Cédula: " + cedula + ")\n" +
                "3. Creando instancia de objeto: Miembro -> " + nombre + "\n" +
                "4. Almacenando objeto en Arreglo de Sesión...\n\n" +
                "¡Objeto creado con éxito! Redirigiendo al controlador.";

            alert(mensajeSimulacion);

            // Una vez terminada la "simulación", enviamos los datos reales al PHP
            this.submit();
        });
    </script>

</body>

</html>