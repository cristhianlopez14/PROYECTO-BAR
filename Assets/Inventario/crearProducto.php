<?php
	require '../../Assets/ConectionBD/conexionbd.php';

if(!empty($_POST["registro"])){
        if(empty($_POST["nombre"]) 
        or empty($_POST["descripcion"])
        or empty($_POST["precio"])
        )
        echo 'los campos no estan diligenciados inventario';
        else {
            $nombre=$_POST["nombre"];
            $descripcion=$_POST["descripcion"];
            $precio=$_POST["precio"];
            $cantidad=$_POST["cantidad"];
            $sql=$conexion->query("INSERT into inventario(producto,descripcionProducto,precioUnitario,cantidadStock)
            values('$nombre','$descripcion','$precio', '$cantidad')");
            //echo 'registro exitoso';
            if ($sql==1) {
                echo 'Producto registrado corectamente';
            } else {
                echo 'no se ha registro';
            }

        }
    }

?>