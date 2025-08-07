<?php
require_once 'db_conexion.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fate.css">
    <link rel="stylesheet" href="cursos.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="image/ATOM LOGO.png" type="image/x-icon">

</head>
<body>




<div class="container mt-5">
  <div class="row g-5 align-items-start">
    
    <!-- Lado izquierdo: Información -->
    <div class="col-lg-6">
      <h2 class="mb-4 text-primary">Panel de cursos</h2>
      <p class="lead">Desde aquí puedes agregar nuevos cursos al sistema. Asegúrate de llenar correctamente todos los campos para que los estudiantes vean la información completa.</p>

      <ul class="list-unstyled mt-4">
        <li class="mb-3">
          <i class="fas fa-plus-circle text-primary me-2"></i>
          Agrega el título del curso de forma clara.
        </li>
        <li class="mb-3">
          <i class="fas fa-align-left text-primary me-2"></i>
          Escribe una descripción detallada.
        </li>
        <li class="mb-3">
          <i class="fas fa-image text-primary me-2"></i>
          Sube una imagen representativa.
        </li>
        <li class="mb-3">
          <i class="fas fa-check text-primary me-2"></i>
          Guarda y listo: el curso estará disponible.
        </li>
      </ul>
    </div>

    <!-- Lado derecho: Formulario -->
    <div class="col-lg-6">
      <form class="formulario-con-borde p-4 shadow rounded bg-white" action="" method="post" enctype="multipart/form-data">
        <h3 class="mb-4 text-center">Agregar Curso</h3>

        <div class="mb-3">
          <label class="form-label">Título del curso</label>
          <input type="text" class="form-control" name="titulo" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Descripción</label>
          <textarea class="form-control" name="descripcion" rows="4" required></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Imagen (JPG, PNG)</label>
          <input type="file" class="form-control" name="imagen" accept="image/*" required>
        </div>

        <?php
        if (isset($_POST["guardar"])) {
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];

            if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
                $imagenTmp = $_FILES["imagen"]["tmp_name"];
                $imagen = fopen($imagenTmp, 'rb');

                try {
                    $sql = $cnnPDO->prepare("INSERT INTO cursos (titulo, descripcion, imagen) VALUES (?, ?, ?)");
                    $sql->bindParam(1, $titulo);
                    $sql->bindParam(2, $descripcion);
                    $sql->bindParam(3, $imagen, PDO::PARAM_LOB);

                    if ($sql->execute()) {
                        echo "<div class='alert alert-success mt-3'>Curso guardado correctamente.</div>";
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Error al guardar.</div>";
                    }
                } catch (PDOException $e) {
                    echo "<div class='alert alert-danger mt-3'>Error: " . $e->getMessage() . "</div>";
                }
            } else {
                echo "<div class='alert alert-warning mt-3'>No se seleccionó una imagen válida.</div>";
            }
        }
        ?>

        <button type="submit" name="guardar" class="btn btn-primary mt-3 w-100">Registrar Curso</button>
        <a href="index.php" class="btn btn-outline-secondary mt-2 w-100">Volver al sitio</a>
      </form>
    </div>
  </div>
</div>


<?php
// Si se ha enviado una solicitud para borrar
if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];

    try {
        $sql = $cnnPDO->prepare("DELETE FROM cursos WHERE id = ?");
        $sql->bindParam(1, $idEliminar);

        if ($sql->execute()) {
            echo "<div class='alert alert-success mt-4'>Curso eliminado correctamente.</div>";
        } else {
            echo "<div class='alert alert-danger mt-4'>Error al eliminar el curso.</div>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Mostrar los cursos existentes
try {
    $sql = $cnnPDO->query("SELECT id, titulo, descripcion FROM cursos ORDER BY id DESC");
    $cursos = $sql->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error al cargar cursos: " . $e->getMessage();
}
?>

<div class="container mt-5">
  <h2>Cursos Registrados</h2>
  <div class="row">
    <?php if (!empty($cursos)) : ?>
      <?php foreach ($cursos as $curso) : ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($curso['titulo']); ?></h5>
              <p class="card-text"><?php echo htmlspecialchars($curso['descripcion']); ?></p>
              <a href="?eliminar=<?php echo $curso['id']; ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este curso?');">Eliminar</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>
      <p>No hay cursos registrados aún.</p>
    <?php endif; ?>
  </div>
</div>






