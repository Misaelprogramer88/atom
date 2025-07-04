<?php
$conn = new mysqli('localhost', 'root', '', 'atom');
$result = $conn->query("SELECT * FROM citas WHERE estado = 'Pendiente'");

echo "<h2>Citas Pendientes</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "Nombre: " . $row['nombre'] . "<br>";
    echo "Fecha: " . $row['fecha'] . " " . $row['hora'] . "<br>";
    echo "<form action='confirmar.php' method='POST' style='display:inline;'>
            <input type='hidden' name='id' value='" . $row['id'] . "'>
            <button type='submit' name='accion' value='confirmar'>Confirmar</button>
          </form>";
    echo "<form action='confirmar.php' method='POST' style='display:inline;'>
            <input type='hidden' name='id' value='" . $row['id'] . "'>
            <button type='submit' name='accion' value='rechazar'>Rechazar</button>
          </form>";
    echo "</div>";
}
$conn->close();
?>
