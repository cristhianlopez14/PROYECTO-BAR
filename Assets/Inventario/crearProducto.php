<?php
	require '../../Assets/ConectionBD/conexionbd.php';

if(!empty($_POST["registro"])){
        if(empty($_POST["nombre"]) 
        or empty($_POST["descripcion"])
        or empty($_POST["precio"])
        or empty($_POST["precioCompra"])
        )
        echo 'los campos no estan diligenciados inventario';
        else {
            $nombre=$_POST["nombre"];
            $descripcion=$_POST["descripcion"];
            $precio=$_POST["precio"];
            $precioCompra=$_POST["precioCompra"];
            $cantidad=$_POST["cantidad"];
            $sql=$conexion->query("INSERT into inventario(producto,descripcionProducto,precioUnitario,precioCompra,cantidadStock)
            values('$nombre','$descripcion','$precio','$precioCompra', '$cantidad')");
            //echo 'registro exitoso';
            if ($sql==1) {
                echo 'Producto registrado corectamente';
            } else {
                echo 'no se ha registro';
            }

        }
    }

?>