<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #343a40;
        }
        .MenuAdmin {
            text-align: center;
            margin-top: 20px;
        }
        .MenuAdmin ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .MenuAdmin ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .MenuAdmin ul li a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #e9ecef;
            transition: background-color 0.3s ease;
        }
        .MenuAdmin ul li a:hover {
            background-color: #ced4da;
        }
        input {
            border:none;
        }
        
        @media screen and (max-width: 768px) {
            .MenuAdmin ul li {
                display: block;
                margin: 10px auto;
            }
        }
    </style>
</head>
<body>
    <h1>Mesero</h1>

    <div class="MenuAdmin">
    <form action="../Informe/generar_informe.php" method="post">

        <ul>
            
            <li><a href="../Pedido/pedido.php">Tomar Pedido</a></li>
            
        </ul>
    </form>
    </div>
</body>
</html>
