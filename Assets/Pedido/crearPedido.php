<?php
	require '../../Assets/ConectionBD/conexionbd.php';

if(!empty($_POST["registro"])){
        if(empty($_POST["numeroPedido"]) 
        or empty($_POST["mesa"])
        or empty($_POST["idUsuario"])  
        or empty($_POST["estadoPedido"]) 
        or empty($_POST["total"])
        or empty($_POST["numeroProductos"])
        or empty($_POST["fecha"])
        or empty($_POST["sucursal"])
        or empty($_POST["productos"])
        )
        echo 'los campos no estan diligenciados pedido';
        else {
            $numeroPedido=$_POST["numeroPedido"];
            $mesa=$_POST["mesa"];
            $estadoPedido=$_POST["estadoPedido"];
            $idUsuario=$_POST["idUsuario"];
            $total=$_POST["total"];
            $fecha=$_POST["fecha"];
            $sucursal=$_POST["sucursal"];
            $productos=$_POST["productos"];
            $numeroProductos = $_POST["numeroProductos"];
            $sql=$conexion->query("INSERT into pedido(numeroPedido,idMesa,idUsuario,estadoPedido,totalPedido,numeroProductos,fechaRegistro,idSucursal,productos)
            values('$numeroPedido','$mesa','$idUsuario','$estadoPedido', '$total', '$numeroProductos', '$fecha', '$sucursal', '$productos')");
            //echo 'registro exitoso';
            if ($sql==1) {
                echo 'usuario registrado corectamente';
            } else {
                echo 'no se ha registro';
            }

        }
    }
 
?>