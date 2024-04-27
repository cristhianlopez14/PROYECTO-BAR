<div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Crear -->
                    <form action="../../Assets/Pedido/crearPedido.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="numeroPedido" class="form-label">Número Pedido</label>
                            <input type="text" placeholder="Nombre" name="numeroPedido" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label for="mesa" class="form-label">Mesa</label>
                        <?php
                            require '../../Assets/ConectionBD/conexionbd.php';
                            
                            $sql1 = "SELECT * FROM mesas";
                            $arrayMesa = $conexion->query($sql1);
                        ?>
                            <select name="mesa" id="" class="form-select" aria-label="Default select example">
                                <?php 
                                    while($mesa = $arrayMesa->fetch_array(MYSQLI_ASSOC)) {
                                ?>
                                <option  value=<?php echo $mesa['idMesa']; ?>><?php echo $mesa['numeroMesa']; ?></option>
                                <?php }
                                ?>       
                            </select>
                        </div>

                        <div class="mb-3">
                        <label for="idUsuario" class="form-label">Tipo Usuario</label>
                        <?php
                            require '../../Assets/ConectionBD/conexionbd.php';
                            $sql1 = "SELECT * FROM usuario";
                            $arrayTipoUsuario = $conexion->query($sql1);
                        ?>
                            <select name="idUsuario" id="" class="form-select" aria-label="Default select example">
                                <?php 
                                    while($opcionTipoUsuario = $arrayTipoUsuario->fetch_array(MYSQLI_ASSOC)) {
                                ?>
                                <option  value=<?php echo $opcionTipoUsuario['idUsuario']; ?>><?php echo $opcionTipoUsuario['nombre']; ?></option>
                                <?php }
                                ?>       
                            </select>
                        </div>
                        <div class="mb-3">
                        <input type="hidden" name="estadoPedido" value="En Proceso">
                        <div class="mb-3">
                            <label for="total" class="form-label">Total</label>
                            <input type="text" placeholder="Total Pedido" name="total" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="numeroProductos" class="form-label">Número de Productos</label>
                            <input type="number" placeholder="Número Producto" name="numeroProductos" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha Registro</label>
                            <input type="date" placeholder="Fecha Registro" name="fecha" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label for="Sucursal" class="form-label">Sucursal</label>
                        <?php
                            require '../../Assets/ConectionBD/conexionbd.php';
                            $sql1 = "SELECT * FROM sucursal";
                            $arraySucursal = $conexion->query($sql1);
                        ?>
                            <select name="sucursal" id="" class="form-select" aria-label="Default select example">
                                <?php 
                                    while($opcionTipoUsuario = $arraySucursal->fetch_array(MYSQLI_ASSOC)) {
                                ?>
                                <option  value=<?php echo $opcionTipoUsuario['idSucursal']; ?>><?php echo $opcionTipoUsuario['nombreSucursal']; ?></option>
                                <?php }
                                ?>       
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="productos" class="form-label">Productos </label>
                            <input type="text" placeholder="productos" name="productos" class="form-control">
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
