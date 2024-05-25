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
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
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
                        <a class="nav-link" href="../Administrador/administrador.php">Inicio</a>
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
        <h1>Pedidos</h1>
        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearModal">Crear Pedido</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mesa</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Total Pedido</th>
                    <th>N° Productos</th>
                    <th>Fecha Registro</th>
                    <th>Sucursal</th>
                    <th>Productos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sqlMostrar = "SELECT * FROM pedido";
                    $resultadoMostrar = $conexion->query($sqlMostrar);
                    while($row = $resultadoMostrar->fetch_array(MYSQLI_ASSOC)) {
                ?>
                <tr>
                    <th><?php echo $row['idPedido']; ?></th>
                        <th><?php echo $row['idMesa']; ?></th>
                    <th><?php echo $row['idUsuario']; ?></th>
                    <th><?php echo $row['estadoPedido']; ?></th>
                    <th><?php echo $row['totalPedido']; ?></th>
                    <th><?php echo $row['numeroProductos']; ?></th>
                    <th><?php echo $row['fechaRegistro']; ?></th>
                    <th><?php echo $row['idSucursal']; ?></th>
                    <th>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Ver<?php echo $row['idPedido'];?>">Ver Producto</button>
                    </th>

                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar<?php echo $row['idPedido'];?>">Agregar Producto</button>
                    </td>
                    <?php
                        include("verPedido.php"); 
                    ?>
                    <?php
                        include("editarPedido.php"); 
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
        include("crearPedido.php")
    ?>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
