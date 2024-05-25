
<?php
// Conexión a la base de datos (debes reemplazar estos valores con los de tu base de datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectobar";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Consulta SQL para obtener datos (cambia esto según tus necesidades)
$sql = "SELECT p.idPedido,p.numeroPedido,p.fechaRegistro,p.estadoPedido,
SUM(o.cantidad * (i.precioUnitario - i.precioCompra)) AS ganancias
FROM pedido p
JOIN orden o ON p.idPedido = o.idPedido
JOIN inventario i ON o.idProducto = i.idProducto
GROUP BY p.idPedido, p.numeroPedido, p.fechaRegistro, p.estadoPedido";
$sql_usuarios = "SELECT * FROM usuario";
$sql_inventario = "SELECT * FROM inventario";


$result = $conn->query($sql);



// Generar el informe (por ejemplo, imprimir datos como CSV)
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=informe.csv');

$output = fopen('php://output', 'w');

if ($result->num_rows > 0) {
    // Encabezados del CSV
    $row = $result->fetch_assoc();
    fputcsv($output, array_keys($row));

    // Datos de la tabla
    do {
        fputcsv($output, $row);
    } while ($row = $result->fetch_assoc());
}


fclose($output);
$conn->close();
?>