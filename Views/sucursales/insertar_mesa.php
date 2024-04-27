<?php
// Definir variables de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Reemplaza con tu nombre de usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$dbname = "proyectobar"; // Reemplaza con el nombre de tu base de datos

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $idSucursal = $_POST['idSucursal'];
    $numeroMesa = $_POST['numeroMesa'];
    $estado = $_POST['estado'];
    $capacidad = $_POST['capacidad'];

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta para insertar la nueva mesa en la base de datos
    $sql_insert = "INSERT INTO mesas (numeroMesa, estado, capacidadMesa, idSucursal) 
                   VALUES ('$numeroMesa', '$estado', '$capacidad', '$idSucursal')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "Nueva mesa ingresada correctamente.";
    } else {
        echo "Error al ingresar la mesa: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
