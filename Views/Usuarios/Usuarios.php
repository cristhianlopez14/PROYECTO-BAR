<?php

    require '../../Assets/ConectionBD/conexionbd.php';
    //Para traer todos los registros de la tabla Usuarios

    $sql1 = "SELECT * FROM tipousuarios";
    $arrayTipoUsuario = $conexion->query($sql1);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template de Prueba</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #343a40;
            text-align: center;
        }
        .table {
            border-collapse: collapse;
            width: 100%;
        }
        .table th, .table td {
            padding: 8px;
            border-bottom: 1px solid #dee2e6;
            text-align: left;
        }
        .table th {
            background-color: #f8f9fa;
            color: #6c757d;
            font-weight: bold;
        }
        .btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container">
        <h1>Usuarios</h1>
        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearModal">Crear Usuario</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sqlMostrar = "SELECT * FROM usuario";
                    $resultadoMostrar = $conexion->query($sqlMostrar);
                    while($row = $resultadoMostrar->fetch_array(MYSQLI_ASSOC)) {
                ?>
                <tr>
                    <th><?php echo $row['idUsuario']; ?></th>
                    <th><?php echo $row['nombre']; ?></th>
                    <th><?php echo $row['usuario']; ?></th>
                    <th><?php echo $row['contraseña']; ?></th>
                    <th><?php echo $row['idTipoUsuario']; ?></th>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar<?php echo $row['idUsuario'];?>">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal<?php echo $row['idUsuario'];?>">Eliminar</button></a>
                    </td>
                    <?php
                        include("Editar.php"); 
                    ?>
                    <?php
                        include("Eliminar.php")
                    ?>
                </tr>
                <?php }
                ?> 
                
                    <!-- <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarModal">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal">Eliminar</button>
                    </td>
                </tr> -->
                
            </tbody>
        </table>
    </div>
    
    <?php
        include("Crear.php")
    ?>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
