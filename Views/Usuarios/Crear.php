<div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Crear -->
                    <form action="../../Assets/Usuario/crearUsuario.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="estado" value="Activo" class="form-control">

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" placeholder="Usuario" name="usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="contraseña" class="form-label">Contraseña</label>
                            <input type="password" placeholder="Contraseña" name="contraseña" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="confContraseña" class="form-label">Confirmar Contraseña</label>
                            <input type="password" placeholder="Confirma Contraseña" name="confContraseña" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label for="idTipoUsuario" class="form-label">Tipo Usuario</label>
                        <?php
                            require '../../Assets/ConectionBD/conexionbd.php';
                            $sql1 = "SELECT * FROM tipousuarios";
                            $arrayTipoUsuario = $conexion->query($sql1);
                        ?>
                            <select name="idTipoUsuario" id="" class="form-select" aria-label="Default select example">
                                <?php 
                                    while($opcionTipoUsuario = $arrayTipoUsuario->fetch_array(MYSQLI_ASSOC)) {
                                ?>
                                <option  value=<?php echo $opcionTipoUsuario['idTipoUsuario']; ?>><?php echo $opcionTipoUsuario['tipoUsuario']; ?></option>
                                <?php }
                                ?>       
                            </select>
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
