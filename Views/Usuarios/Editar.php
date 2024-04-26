<!-- Modal Editar -->
<?php
    include("../../Assets/Usuario/actualizarUsuario.php")
?>
<div class="modal fade" id="Editar<?php echo $row['idUsuario'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Editar --> 
                    <form action="#" method="post">
                        <input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario']; ?>">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" placeholder="Usuario" name="usuario" class="form-control" value="<?php echo $row['usuario']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Estado</label>
                            <select name="Estado" id="" class="form-select" aria-label="Default select example">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="idTipoUsuario" class="form-label">Tipo Usuario</label>
                            <select name="idTipoUsuario" id="idTipoUsuario" class="form-select" aria-label="Default select example">
                                <?php 
                                    while($opcionTipoUsuario = $arrayTipoUsuario->fetch_array(MYSQLI_ASSOC)) {
                                ?>
                                <option  value=<?php echo $opcionTipoUsuario['idTipoUsuario']; ?>><?php echo $opcionTipoUsuario['tipoUsuario']; ?></option>
                                <?php }
                                ?>       
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" value="editarUsuario" name="editarUsuario">Guardar Cambios</button>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="editarUsuario">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>