<?php
	require '../../Assets/ConectionBD/conexionbd.php';

	if(!empty($_POST["editarUsuario"])){
	
	$id = $_POST['idUsuario'];
	$nombre = $_POST['nombre'];
	$usuario = $_POST['usuario'];
	$rol = $_POST['idTipoUsuario'];
	$estado = $_POST['Estado'];
	
	
	$sql1 = "UPDATE usuario SET nombre='$nombre', usuario='$usuario', idTipoUsuario='$rol', estado ='$estado'  WHERE idUsuario = '$id'";
	$resultado = $conexion->query($sql1);

}
	
?>