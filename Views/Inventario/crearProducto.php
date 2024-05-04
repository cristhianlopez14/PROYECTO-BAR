<div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Crear -->
                    <form action="../../Assets/Inventario/crearProducto.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" placeholder="Descripcion Producto" name="descripcion" class="form-control">
                        </div>
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="text" placeholder="Cantidad Producto" value="0" name="cantidad" class="form-control">
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" placeholder="Precio Producto" name="precio" class="form-control">
                        </div>
                        
                        <input type="submit" name="registro" id="Registrar">
                    </form>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="registro" class="btn btn-primary" data-bs-dismiss="modal">Crear Usuario</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
