<?php
$conn = new mysqli('localhost', 'root', '', 'atom');

$id = $_POST['id'];
$accion = $_POST['accion'];
$estado = $accion == 'confirmar' ? 'Confirmada' : 'Rechazada';

$stmt = $conn->prepare("UPDATE citas SET estado = ? WHERE id = ?");
$stmt->bind_param("si", $estado, $id);

if ($stmt->execute()) {
    echo "Cita " . strtolower($estado) . " con éxito.";
} else {
    echo "Error al actualizar la cita: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
