<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard Administrativo</title>
</head>
<style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #333;
            color: white;
        }

        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            color: white;
            font-weight: bold;
        }

        .btn-success {
            background: #28a745;
        }

        .btn-danger {
            background: #dc3545;
        }

        .text-success {
            color: #28a745;
            font-weight: bold;
        }

        .text-danger {
            color: #dc3545;
            font-weight: bold;
        }

        .search-container {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
        }
        th {
            text-align: center;
        }
    </style>
<body>
    
    <h2>Gestión de Miembros</h2>

    <div class="search-container">
        <form method="GET" action="index.php" style="display: flex; gap: 10px; flex-grow: 1;">
            <input type="number" name="buscar_cedula" placeholder="Buscar por cédula..." required>
            <button type="submit" class="btn btn-success">Buscar</button>
            <a href="index.php" class="btn btn-danger">Limpiar</a>
        </form>
        <a href="Registrar_Miembro.php" class="btn" style="background: #007bff;">+ Nuevo Miembro</a>
        <a href="Registrar_Pago.php" class="btn" style="background: #ffc107; color: black;">$ Registrar Pago</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td>12345678</td>
                    <td>Yonkleiberson</td>
                    <td>04121234567</td>
                    <td>Yonkleiberson@gmail.com</td>
                    <td><a class="btn" style="background: #28a745;">Activo</a></td>  
                    <td>
                        <a class="btn" style="background: #ffc107; color: black;">Editar</a>
                        <a class="btn" style="background: #333;">Eliminar</a>
                    </td>
                </tr>
            
        </tbody>
    </table>

</body>
</html>