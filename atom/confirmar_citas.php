<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'atom');
$result = $conn->query("SELECT * FROM citas WHERE estado = 'Pendiente'");
$historial = $conn->query("SELECT * FROM citas WHERE estado != 'Pendiente' ORDER BY fecha DESC, hora DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmar Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-light">

<div class="container my-5">
    <h2 class="text-center mb-4">Citas Pendientes</h2>

    <?php if ($result->num_rows > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center bg-white">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['nombre']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= $row['fecha'] ?></td>
                        <td><?= $row['hora'] ?></td>
                        <td>
                            <form action="confirmar.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" name="accion" value="confirmar" class="btn btn-success btn-sm">Aceptar</button>
                            </form>
                            <form action="confirmar.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" name="accion" value="rechazar" class="btn btn-danger btn-sm">Rechazar</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-info text-center">No hay citas pendientes por confirmar.</div>
    <?php endif; ?>

    <h3 class="text-center mt-5 mb-3">Historial de Citas Confirmadas y Rechazadas</h3>

<?php if ($historial->num_rows > 0): ?>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center bg-white">
            <thead class="table-secondary">
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $historial->fetch_assoc()): ?>
                    <tr class="<?= $row['estado'] == 'Confirmada' ? 'table-success' : 'table-danger' ?>">
                        <td><?= htmlspecialchars($row['nombre']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= $row['fecha'] ?></td>
                        <td><?= $row['hora'] ?></td>
                        <td><strong><?= $row['estado'] ?></strong></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <div class="alert alert-secondary text-center">Aún no hay citas confirmadas o rechazadas.</div>
<?php endif; ?>


</div>

<?php
if (isset($_SESSION['respuesta'])):
    $data = $_SESSION['respuesta'];
    $accion = $data['accion'] === 'confirmar' ? 'confirmada' : 'rechazada';
    $icon = $data['accion'] === 'confirmar' ? 'success' : 'info';
    $mensaje = "La cita fue $accion y se envió un correo a <b>{$data['email']}</b>.";
    $info = "<b>Nombre:</b> {$data['nombre']}<br><b>Fecha:</b> {$data['fecha']}<br><b>Hora:</b> {$data['hora']}";
    unset($_SESSION['respuesta']);
?>
<script>
Swal.fire({
    title: '¡Cita <?= $accion ?>!',
    html: `<?= $mensaje ?><br><br><?= $info ?>`,
    icon: '<?= $icon ?>',
    confirmButtonText: 'Aceptar',
    confirmButtonColor: '#1cc5dc',
    background: '#f8f9fa',
    color: '#343a40'
});
</script>
<?php endif; ?>


</body>
</html>

<?php $conn->close(); ?>
