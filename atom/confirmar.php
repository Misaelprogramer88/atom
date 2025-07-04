<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$conn = new mysqli('localhost', 'root', '', 'atom');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $accion = $_POST['accion'];
    $estado = $accion == 'confirmar' ? 'Confirmada' : 'Rechazada';

    // Obtener información del cliente
    $stmt = $conn->prepare("SELECT nombre, email, fecha, hora FROM citas WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($nombre, $email, $fecha, $hora);
    $stmt->fetch();
    $stmt->close();

    // Actualizar estado
    $stmt2 = $conn->prepare("UPDATE citas SET estado = ? WHERE id = ?");
    $stmt2->bind_param("si", $estado, $id);
    $stmt2->execute();
    $stmt2->close();

    // Si se confirmó, enviar correo
    if ($accion == 'confirmar') {
        $mail = new PHPMailer(true);
        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Usa el servidor que prefieras
            $mail->SMTPAuth = true;
            $mail->Username = 'tucorreo@gmail.com';     // Cambia esto
            $mail->Password = 'tu-contraseña';          // Usa una contraseña de aplicación segura
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Configurar el correo
            $mail->setFrom('tucorreo@gmail.com', 'ATOM');
            $mail->addAddress($email, $nombre);
            $mail->Subject = 'Confirmación de tu cita - ATOM';

            $mail->Body = "Hola $nombre,\n\nTu cita ha sido confirmada con éxito.\n\n🗓 Fecha: $fecha\n⏰ Hora: $hora\n\nGracias por confiar en ATOM.\n\nSaludos,\nEquipo ATOM";
            $mail->send();

        } catch (Exception $e) {
            error_log("Error al enviar el correo: {$mail->ErrorInfo}");
        }
    }

    header("Location: confirmar_citas.php");
    exit();
}
?>
