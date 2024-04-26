<?php
include("../../Assets/ConectionBD/conexionbd.php");

if(!empty($_POST["Ingresar"])){
    if(empty($_POST["usuario"]) || empty($_POST["contraseña"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        // Ejecutar consulta SQL para verificar las credenciales
        $sql = $conexion->query("SELECT * FROM usuario WHERE usuario='$usuario' AND contraseña='$contraseña'");
        
        // Verificar si se obtuvieron resultados de la consulta
        if($sql->num_rows > 0){
            // Obtener el rol del usuario
            $rol_query = $conexion->query("SELECT idTipoUsuario	 FROM usuario WHERE usuario='$usuario' AND contraseña='$contraseña'");
            $rol = $rol_query->fetch_assoc()['idTipoUsuario'];

            // Redirigir según el rol del usuario
            if ($rol === '1') {
                header("Location: ../../Views/Administrador/administrador.php");
            } elseif ($rol === 2) {
                header("Location: ../views/mesero.php");
            } elseif ($rol === 3) {
                header("Location: ../views/cajero.php");
            } else {
                header("Location: singup.php");
            }
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?> 
