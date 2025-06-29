<?php
$conn = new mysqli('localhost', 'root', '', 'sistema_citas');

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$estado = 'Pendiente';

$stmt = $conn->prepare("INSERT INTO citas (nombre, email, fecha, hora, estado) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nombre, $email, $fecha, $hora, $estado);

if ($stmt->execute()) {
    echo "Cita registrada con éxito. Será confirmada pronto.";
} else {
    echo "Error al registrar la cita: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
