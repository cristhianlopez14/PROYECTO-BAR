 <!-- Modal Eliminar -->
 <?php
    include("../../Assets/Usuario/borrarUsuario.php")
?>
 <div class="modal fade" id="eliminarModal<?php echo $row['idUsuario'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#"  method="post">
                        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $row['idUsuario']?>">
                        ¿Está seguro de que desea eliminar este Usuario?                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="eliminarUsuario" value="eliminarUsuario" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>