<!-- Modal Editar -->
<?php
    include("../../Assets/Pedido/actualizarPedido.php");

    if (isset($_GET['idProducto'])) {
        $idProductoConsultar = $_GET['idProducto'];
    
        // Preparar la consulta SQL
        $consulta = $conexion->prepare('SELECT * FROM inventario WHERE idProducto = ?');
    
        // Vincular el parámetro utilizando bind_param
        $consulta->bind_param('i', $idProductoConsultar);
    
        // Ejecutar la consulta
        $consulta->execute();
    
        // Obtener el resultado de la consulta
        $resultado = $consulta->get_result();
    
        // Obtener los datos como un array asociativo
        $consultaProducto = $resultado->fetch_all(MYSQLI_ASSOC);
    
        // Ahora puedes utilizar $consultaProducto para mostrar la información que necesites
    }
    
    
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
    
<script>
    function buscar(){
        var idProducto = document.getElementById('idProducto').value;
        window.location.href = "http://localhost/xampp/PROYECTO-BAR/Views/Pedido/pedido.php?idProducto="+idProducto;
        
    }
</script>
<div class="modal fade" id="Editar<?php echo $row['idPedido'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Productos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <!-- Formulario de Editar --> 
                    
                    <form action="#" method="post">
                        <input type="text" name="idPedido" value="<?php echo $row['idPedido']; ?>">
                        
                        <?php
                            require '../../Assets/ConectionBD/conexionbd.php';
                            //Para traer todos los registros de la tabla Usuarios
                        
                            $sql4 = "SELECT * FROM inventario WHERE cantidadStock > 0";
                            $arrayProductosDisponibles = $conexion->query($sql4);

                            
                        ?>
    
                        <div class="mb-3">
                            <label for="productos" class="form-label">Producto</label>
                            <select onchange="return buscar()" class="form-select" aria-label="Default select example" name="idProducto" id="idProducto">
                            <?php 
                                    while($opcionProducto = $arrayProductosDisponibles->fetch_array(MYSQLI_ASSOC)) {
                                ?>
                                <option  value=<?php echo $opcionProducto['idProducto']; ?>><?php echo $opcionProducto['producto']; ?></option>
                                <?php }
                                ?>   
                            </select>
                        </div>
                        <?php
                            if ($consultaProducto) {?>
                                <input type="hidden" name="idProducto" value="<?php echo $consultaProducto[0]['idProducto']; ?>">
                        <?php
                            }
                            else {?>
                               <input type="text" name="idProducto" value="">
                                <?php
                            }
                        ?>
                        
                        
                        <div class="mb-3">
                            
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <?php
                            if ($consultaProducto) {?>
                                <input type="text" name="descripcion"  class="form-control" value="<?php echo $consultaProducto[0]['descripcionProducto']; ?>">
                        <?php
                            }
                            else {?>
                                <input type="text" name="idPedido" value="">
                                <?php
                            }
                        ?>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <?php
                            if ($consultaProducto) {?>
                                <input type="text" placeholder="Descripción Producto" name="cantidad" class="form-control" value="<?php echo $consultaProducto[0]['cantidadStock']; ?>">
                        <?php
                            }
                            else {?>
                                <input type="text" placeholder="Descripción Producto" name="cantidad" class="form-control" value="">
                                <?php
                            }
                        ?>
                            
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <?php
                            if ($consultaProducto) {?>
                                <input type="text" placeholder="Precio Producto" name="precio" class="form-control" value="<?php echo $consultaProducto[0]['precioUnitario']; ?>">
                        <?php
                            }
                            else {?>
                            <input type="text" placeholder="Precio Producto" name="precio" class="form-control" value="">

                                <?php
                            }
                        ?>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" value="editarPedido" name="editarPedido">Guardar Cambios</button>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="editarUsuario">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>