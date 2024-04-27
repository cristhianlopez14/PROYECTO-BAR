<!-- sucursal.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Administración de Sucursales y Mesas</title>
</head>
<body class="bar-background">

    <header class="bar-header">
        <div class="container">
            <h1>Administración de Sucursales y Mesas</h1>
        </div>
    </header>

    <div class="container">
        <section class="main-content">
            <div class="sidebar">
                <h2>Menú de Administración</h2>
                <ul>
                    <li>Administrar Sucursales</li>
                    <li>Administrar Mesas</li>
                    <!-- Puedes agregar más opciones de menú según sea necesario -->
                </ul>
            </div>

            <div class="content">
                <!-- Incluir formulario de selección de sucursal -->
                <?php include 'formulario_sucursal.php'; ?>

                <!-- Lógica para mostrar las mesas y operaciones de mesas -->
                <?php include 'mostrar_mesas.php'; ?>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 The New Bar. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
