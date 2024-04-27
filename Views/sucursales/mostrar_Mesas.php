<!-- mostrar_mesas.php -->

<?php
// Procesar la selección de sucursal y mostrar las mesas
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sucursal'])) {
    $selectedSucursal = $_POST['sucursal'];

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta para obtener las mesas de la sucursal seleccionada
    $sql_mesas = "SELECT idMesa, numeroMesa, estado, capacidadMesa FROM mesas WHERE idSucursal = $selectedSucursal";
    $result_mesas = $conn->query($sql_mesas);

    if ($result_mesas->num_rows > 0) {
        echo "<h2>Mesas de la Sucursal:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID Mesa</th><th>Número de Mesa</th><th>Estado</th><th>Capacidad</th></tr>";
        while ($row = $result_mesas->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idMesa'] . "</td>";
            echo "<td>" . $row['numeroMesa'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            echo "<td>" . $row['capacidadMesa'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron mesas para esta sucursal.";
    }

    $conn->close();
}
?>

<!-- Formulario para insertar una nueva mesa -->
<h2>Ingresar Nueva Mesa</h2>
<form method="post" action="insertar_mesa.php">
    <input type="hidden" name="idSucursal" value="<?php echo $selectedSucursal; ?>">
    <label for="numeroMesa">Número de Mesa:</label>
    <input type="text" name="numeroMesa" required><br>
    <label for="estado">Estado:</label>
    <input type="text" name="estado" required><br>
    <label for="capacidad">Capacidad:</label>
    <input type="number" name="capacidad" required><br>
    <input type="submit" name="submit" value="Agregar Mesa">
</form>

