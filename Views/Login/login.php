<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax
    /libs/font-awesome/5.15.3a/css/all/min/.css">
</head>
<body>
    <div class="contenedor">
        <h1>Inicio de Sesión</h1>
        <?php
        include("../../Assets/ConectionBD/conexionbd.php");
        include("../../Assets/Login/validar.php");
        ?>
        <form action="#" method="post">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="text" placeholder="Contraseña" name="contraseña">
            
            <input type="submit" name="Ingresar" value="Ingresar" class="button-submit">
            
        </form>
           <!-- <button>Ingresar</button>
            <div class="member">
                No estas registrado? <a href="./singUp.php"> Registrate ahora.</a>
            </div> -->

        

    </div>
    
</body>
</html>
