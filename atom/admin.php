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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="image/ATOM LOGO.png" type="image/x-icon">

</head>
<body>
    <header id="navbar" class="navbar ">
  <div class="navbar-container">
    <div class="navbar-logo">
      <a href="index.php"><img src="image/LetrasAzul.png" alt="Logo" ></a>

    </div>

    <div class="menu-toggle" id="menu-toggle">
      ☰
    </div>

    <nav class="navbar-links" id="navbar-links">
  <a href="#servicios">Servicios</a>
  <a href="#nosotros">Nosotros</a>
  <a href="#eventos">Eventos</a>

  <!-- Dropdown personalizado -->
  <div class="dropdown-atom">
    <span class="dropdown-toggle-atom">Cursos ▾</span>
    <ul class="dropdown-menu-atom">
      <li><a href="cursob-i.php">Básico – Intermedio</a></li>
      <li><a href="cursos.php">Intermedio – Avanzado</a></li>
    </ul>
  </div>

  <a href="#contacto">Contacto</a>
</nav>

  </div>
</header>



<div class="container mt-5">
  <form class="formulario-con-borde" style="padding: 30px;" action="" method="post" enctype="multipart/form-data">
    <h1 style="margin-top: 20px;">Agregar Curso</h1>

    <div class="mb-3 mt-4">
      <label class="form-label" style="font-size: 18px;">Título del curso</label>
      <input type="text" class="form-control" name="titulo" required>
    </div>

    <div class="mb-3 mt-4">
      <label class="form-label" style="font-size: 18px;">Descripción</label>
      <textarea class="form-control" name="descripcion" rows="4" required></textarea>
    </div>

    <div class="mb-3 mt-4">
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
                echo "<div class='alert alert-success'>Curso guardado correctamente.</div>";
            } else {
                echo "<div class='alert alert-danger'>Error al guardar.</div>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "<div class='alert alert-warning'>No se seleccionó una imagen válida.</div>";
    }
}
?>


    <button type="submit" name="guardar" class="btn btn-primary mt-3">Registrar Curso</button>
    <a href="index.php" class="btn btn-secondary mt-3">Volver al sitio</a>
  </form>
</div>


<?php

// Eliminar curso si se recibe un ID
if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];
    try {
        $stmt = $cnnPDO->prepare("DELETE FROM cursos WHERE id = ?");
        $stmt->execute([$idEliminar]);
        echo "<div class='alert alert-success'>Curso eliminado correctamente.</div>";
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Error al eliminar: " . $e->getMessage() . "</div>";
    }
}
?>
