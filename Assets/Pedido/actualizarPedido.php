<?php
	require '../../Assets/ConectionBD/conexionbd.php';

	if(!empty($_POST["editarPedido"])){
	
	$idPedido = $_POST['idPedido'];
	$idProducto = $_POST['idProducto'];
	$cantidad = $_POST['cantidad'];

	
	
	$sql10 = "INSERT INTO orden (idPedido, idProducto, cantidad) VALUES ('$idPedido', '$idProducto', '$cantidad')";
	$resultado = $conexion->query($sql10);

	$sql11 = "UPDATE inventario SET cantidadStock = cantidadStock - '$cantidad' where idProducto = '$idProducto'";
	$resultado2 = $conexion->query($sql11);

	if ($resultado==1) {
		print_r('Registro Creado') ;
	}else {
		print_r('Registro NO Creado');
	}

}
	
?>
