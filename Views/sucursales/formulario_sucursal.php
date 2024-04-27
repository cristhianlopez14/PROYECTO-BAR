<!-- formulario_sucursal.php -->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="sucursal">Selecciona una Sucursal:</label>
    <select name="sucursal" id="sucursal">
        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "proyectobar";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Consulta para obtener las sucursales
        $sql = "SELECT idSucursal, nombreSucursal FROM sucursal";
        $result = $conn->query($sql);

        // Mostrar las sucursales en el menú desplegable
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['idSucursal'] . "'>" . $row['nombreSucursal'] . "</option>";
        }

        

        $conn->close();
        ?>
    </select>
    <input type="submit" value="Ver Mesas">
</form>

