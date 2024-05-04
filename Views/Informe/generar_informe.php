
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
$sql = "SELECT * FROM pedidoinventario";
$sql_usuarios = "SELECT * FROM usuario";
$sql_inventario = "SELECT * FROM inventario";


$result = $conn->query($sql);
$result_usuarios = $conn->query($sql_usuarios);
$result_inventario = $conn->query($sql_inventario);


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

if ($result_usuarios->num_rows > 0) {
    // Encabezados del CSV
    $row = $result_usuarios->fetch_assoc();
    fputcsv($output, array_keys($row));

    // Datos de la tabla
    do {
        fputcsv($output, $row);
    } while ($row = $result_usuarios->fetch_assoc());
}
if ($result_inventario->num_rows > 0) {
    // Encabezados del CSV
    $row = $result_inventario->fetch_assoc();
    fputcsv($output, array_keys($row));

    // Datos de la tabla
    do {
        fputcsv($output, $row);
    } while ($row = $result_inventario->fetch_assoc());
}

fclose($output);
$conn->close();
?>