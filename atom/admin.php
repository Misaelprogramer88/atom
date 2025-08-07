<?php
require_once 'db_conexion.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Atom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fate.css">
    <link rel="stylesheet" href="cursos.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="image/logopes.png" type="image/x-icon">

</head>
<body>

<header id="navbar" class="navbar">
  <div class="navbar-container">
    <div class="navbar-logo">
      <a href="index.php"><img src="image/LetrasAzul.png" alt="Logo"></a>
    </div>

    <div class="menu-toggle" id="menu-toggle">
      ☰
    </div>

    <nav class="navbar-links" id="navbar-links">

      <a href="confirmar_citas.php">Citas</a>

      
    </nav>

    <!-- Íconos de contacto fuera del menú hamburguesa -->
    <div class="navbar-contact-icons">
      <a href="https://wa.me/528446226979" target="_blank" class="icono-contacto" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="mailto:ariel.perales@disenoymaquinados.mx" class="icono-contacto" title="Correo">
        <i class="fas fa-envelope"></i>
      </a>
    </div>
  </div>
</header>
 <!-- Navbar para celulares -->
<script>
  const toggle = document.getElementById('menu-toggle');
  const links = document.getElementById('navbar-links');

  toggle.addEventListener('click', () => {
    links.classList.toggle('active');
  });
</script>

<script>
  // Abrir y cerrar solo un dropdown a la vez en móviles
  document.querySelectorAll(".dropdown-toggle-atom").forEach(function (toggle) {
    toggle.addEventListener("click", function (e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        const currentMenu = this.nextElementSibling;

        // Cerrar todos los demás
        document.querySelectorAll(".dropdown-menu-atom").forEach(function (menu) {
          if (menu !== currentMenu) {
            menu.classList.remove("active");
          }
        });

        // Alternar el actual
        currentMenu.classList.toggle("active");
      }
    });
  });
</script>



<div class="container mt-5">
  <div class="row g-5 align-items-start">
    
    <!-- Lado izquierdo: Información -->
    <div class="col-lg-6" style="margin-top: 200px;">
      <h2 class="mb-4 text-primary" style="font-size: 4rem;">Panel de cursos</h2>
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
    <div class="col-lg-6"  style="margin-top: 100px;">
      <form class="formulario-con-borde p-4 shadow rounded bg-white" action="" method="post" enctype="multipart/form-data">
      <div class="d-flex align-items-center mb-4">
    <img src="image/ATOM LOGO.png" style="width: 60px;" class="me-3">
    <h3 class="mb-0">Agregar Curso</h3>
  </div>

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
  <h2 class="mb-4 text-center">📚 Cursos Registrados</h2>

  <?php if (!empty($cursos)) : ?>
    <?php foreach ($cursos as $curso) : ?>
      <div class="card mb-4 shadow-sm" style="border-left: 6px solid #007bff;">
        <div class="card-body d-flex flex-column flex-md-row align-items-start justify-content-between">
          <div class="me-md-4 mb-3 mb-md-0" style="flex: 1;">
            <h4 class="card-title"><?php echo htmlspecialchars($curso['titulo']); ?></h4>
            <p class="card-text"><?php echo nl2br(htmlspecialchars($curso['descripcion'])); ?></p>
          </div>
          <div class="d-flex align-items-center">
            <a href="?eliminar=<?php echo $curso['id']; ?>" 
              class="btn btn-outline-danger"
              onclick="return confirm('¿Estás seguro de que deseas eliminar este curso?');">
              Eliminar
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else : ?>
    <div class="alert alert-info text-center">
      No hay cursos registrados aún.
    </div>
  <?php endif; ?>
</div>



