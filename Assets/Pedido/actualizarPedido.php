<?php
	require '../../Assets/ConectionBD/conexionbd.php';

	if(!empty($_POST["editarPedido"])){
	
	$idPedido = $_POST['idPedido'];
	$idProducto = $_POST['idProducto'];
	$cantidad = $_POST['cantidad'];
	$sucursal = $_POST['idSucursal'];

	
	
	$sql10 = "INSERT INTO pedidoInventario (idPedido, idProducto, cantidad, idSucursal) 
				VALUES ('$idPedido', '$idProducto', '$cantidad', '$sucursal')";
	$resultado = $conexion->query($sql10);

	if ($resultado==1) {
		print_r('Registro Creado') ;
	}else {
		print_r('Registro NO Creado');
	}

}
	
?>
