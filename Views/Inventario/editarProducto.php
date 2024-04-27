<!-- Modal Editar -->
<?php
    include("../../Assets/Inventario/actualizarProducto.php")
?>
<div class="modal fade" id="Editar<?php echo $row['idProducto'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Editar --> 
                    <form action="#" method="post">
                        <input type="hidden" name="idProducto" value="<?php echo $row['idProducto']; ?>">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control" value="<?php echo $row['producto']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" placeholder="Descripción Producto" name="descripcion" class="form-control" value="<?php echo $row['descripcionProducto']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="text" placeholder="Descripción Producto" name="cantidad" class="form-control" value="<?php echo $row['cantidadStock']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" placeholder="Precio Producto" name="precio" class="form-control" value="<?php echo $row['precioUnitario']; ?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" value="editarProducto" name="editarProducto">Guardar Cambios</button>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="editarUsuario">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>