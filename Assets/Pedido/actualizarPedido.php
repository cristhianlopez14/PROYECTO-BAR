<?php
	require '../../Assets/ConectionBD/conexionbd.php';

	if(!empty($_POST["editarPedido"])){
	
	$idPedido = $_POST['idPedido'];
	$idProducto = $_POST['idProducto'];
	$cantidad = $_POST['cantidad'];
	
	
	$sql10 = "INSERT INTO pedidoInventario (idPedido, idProducto, cantidad) VALUES ('$idPedido', '$idProducto', '$cantidad')";
	$resultado = $conexion->query($sql10);

}
	
?>
