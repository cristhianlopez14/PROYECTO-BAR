<!-- Modal Editar -->
<?php
    include("../../Assets/Pedido/actualizarPedido.php");

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

</head>
<body>

<div class="modal fade" id="Ver<?php echo $row['idPedido'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ver Productos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <!-- Formulario de Editar --> 
                    <?php 
                        $consulta = $conexion->prepare('SELECT * FROM pedidoinventario WHERE idPedido =?');
                        $consulta->bind_param('i', $row['idPedido']);
                        $consulta->execute();
                        $resultado = $consulta->get_result();
                        while($rows = $resultado->fetch_array(MYSQLI_ASSOC)) {
                            $idProducto = $rows['idProducto'];
                            $consultar = $conexion->prepare('SELECT * FROM inventario WHERE idProducto = ?');
                            $consultar->bind_param('i', $idProducto);
                            $consultar->execute();
                            $resultadoProducto = $consultar->get_result();
                            $producto = $resultadoProducto->fetch_assoc(); // Obtiene la fila de resultado como un array asociativo
                    ?>
                        <h6>Producto: <?php echo $producto['producto']; ?></h6> <h6>Cantidad: <?php echo $rows['cantidad']; ?></h6> <h6>Precio: <?php echo $rows['idProducto']; ?></h6> <hr>
                        <?php } ?>

                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>
                </div>
        </div>
    </div>
</div>

    
</body>
</html>