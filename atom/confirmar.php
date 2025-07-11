<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


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
        echo "Enviando correo a: $email<br>";


        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'paulinasalas613@gmail.com';     
            $mail->Password = 'efbx kwdn mvfg jhqp';          
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Hace que funcione :D
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];
            
            $mail->setFrom('paulinasalas613@gmail.com', 'ATOM');
            $mail->addAddress($email, $nombre);
            $mail->Subject = 'Confirmación de tu cita - ATOM';

            $mail->Body = "Hola $nombre,\n\nTu cita ha sido confirmada con éxito.\n\n🗓 Fecha: $fecha\n⏰ Hora: $hora\n\nGracias por confiar en ATOM.\n\nSaludos,\nEquipo ATOM";
            $mail->send();
            echo "Correo enviado correctamente a $email";


        } catch (Exception $e) {
            error_log("Error al enviar el correo: {$mail->ErrorInfo}");
            echo "Error al enviar el correo: {$mail->ErrorInfo}";

        }
    }

    // Mostrar alerta con datos de la cita
session_start();
$_SESSION['respuesta'] = [
    'accion' => $accion,
    'nombre' => $nombre,
    'email' => $email,
    'fecha' => $fecha,
    'hora' => $hora
];

header("Location: confirmar_citas.php");
exit();


    exit();
}
?>
