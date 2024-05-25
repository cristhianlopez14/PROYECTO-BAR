<?php
	require '../../Assets/ConectionBD/conexionbd.php';

	if(!empty($_POST["editarProducto"])){
	
	$id = $_POST['idProducto'];
	$producto = $_POST['nombre'];
	$descripcionProducto = $_POST['descripcion'];
	$cantidadStock = $_POST['cantidad'];
	$precioUnitario = $_POST['precio'];
	$precioCompra = $_POST['precioCompra'];
	
	
	$sql1 = "UPDATE inventario SET producto='$producto', descripcionProducto='$descripcionProducto', cantidadStock='$cantidadStock', precioUnitario ='$precioUnitario', precioCompra = '$precioCompra' WHERE idProducto = '$id'";
	$resultado = $conexion->query($sql1);

}
	
?>