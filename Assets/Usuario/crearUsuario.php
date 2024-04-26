<?php
	require '../../Assets/ConectionBD/conexionbd.php';

if(!empty($_POST["registro"])){
        if(empty($_POST["nombre"]) 
        or empty($_POST["usuario"])
        or empty($_POST["sucursal"])  
        or empty($_POST["estado"]) 
        or empty($_POST["contraseña"])
        or empty($_POST["idTipoUsuario"])
        or empty($_POST["confContraseña"]))
        echo 'los campos no estan diligenciados';
        else{
        if($_POST["contraseña"] != $_POST["confContraseña"]){
            echo 'la contraseña no coincide';
        } else {
            $nombre=$_POST["nombre"];
            $usuario=$_POST["usuario"];
            $estado=$_POST["estado"];
            $sucursal=$_POST["sucursal"];
            $contraseña=$_POST["contraseña"];
            $idTipoUsuario = $_POST["idTipoUsuario"];
            $sql=$conexion->query("INSERT into usuario(nombre,usuario,contraseña,idTipoUsuario,estado,IdSucursal)
            values('$nombre','$usuario','$contraseña', '$idTipoUsuario', '$estado', '$sucursal')");
            //echo 'registro exitoso';
            if ($sql==1) {
                echo 'usuario registrado corectamente';
            } else {
                echo 'no se ha registro';
            }

        }
    }
} 
?>