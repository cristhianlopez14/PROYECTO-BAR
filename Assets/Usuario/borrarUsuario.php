<?php
	
	require '../../Assets/ConectionBD/conexionbd.php';
	
	if(!empty($_POST["eliminarUsuario"])){

    $idUsuarioEliminar = $_POST['idUsuario'];
	
	$sql3 = "UPDATE  usuario SET estado='Inactivo' WHERE idUsuario = $idUsuarioEliminar";
	$resultado = $conexion->query($sql3);
	if ($sql3==1) {
		echo 'usuario eliminado corectamente';
	} else {
		echo 'no se ha eliminado';
	}
	}
?>