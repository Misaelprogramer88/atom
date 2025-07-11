<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="image/ATOM LOGO.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: white;
        }
        #agendar-cita {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: rgba(0, 0, 0, 0.6);
        }
        .form-container {
            background: #1e293b;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .form-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
        }
        .form-container h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #1cc5dc;
        }
        .form-control {
            background: #2c3e50;
            border: none;
            border-radius: 8px;
            color: white;
            padding: 0.8rem;
        }
        .form-control:focus {
            box-shadow: none;
            border: 1px solid #1cc5dc;
        }
        .btn-primary {
            background: #1cc5dc;
            border: none;
            padding: 0.8rem;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background: #0f87a8;
        }
        label {
            font-weight: bold;
            margin-bottom: 0.5rem;
            display: block;
            color: #b0bec5;
        }

        .navbar {
  background-color: #1f2c3e;
  padding: 15px 30px;
  position: relative;
  z-index: 999;
  width: 100%;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.navbar-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
}


.navbar-logo {
  flex-shrink: 0;
  margin-right: 100px;
}

.navbar-logo img {
  height: 30px;
  width: auto;
  display: block;
}


.navbar-links a {
  position: relative;
  color: white;
  text-decoration: none;
  font-size: 1.1rem;
  padding: 10px 15px; 
  transition: color 0.3s ease;
}

.navbar-links a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 5px;
  width: 0%;
  height: 3px;
  background-color: #1cc5dc;
  transition: width 0.3s ease;
  border-radius: 2px;
}

.navbar-links a:hover {
  color: #1cc5dc; 
}

.navbar-links a:hover::after {
  width: 100%;
}
    </style>
</head>
<body>

 <div id="trigger" style="height: 0px;"></div>

  <!-- ✅ Navbar (se ve normal al inicio) -->
  <header id="navbar" class="navbar">
  <div class="navbar-container">
    <div class="navbar-logo">
      <img src="image/LetrasAzul.png" alt="Logo" style="margin-right: 20px;"/>
    </div>

    <nav class="navbar-links" id="navbar-links">
      <a href="#servicios">Servicios</a>
      <a href="#nosotros">Nosotros</a>
      <a href="#eventos">Eventos</a>
      <a href="#contacto">Contacto</a>
    </nav>
  </div>
</header>


  <!-- Placeholder para evitar salto -->
  <div class="navbar-placeholder"></div>

    

   <script>
  const navbar = document.getElementById('navbar');
  const trigger = document.getElementById('trigger');

  const observer = new IntersectionObserver(([entry]) => {
    if (!entry.isIntersecting) {
      navbar.classList.add('sticky');
    } else {
      navbar.classList.remove('sticky');
    }
  }, {
    root: null,
    threshold: 0,
  });

  observer.observe(trigger);
</script>

  <!-- Navbar para celulares -->
<script>
  const toggle = document.getElementById('menu-toggle');
  const links = document.getElementById('navbar-links');

  toggle.addEventListener('click', () => {
    links.classList.toggle('active');
  });
</script>

<section id="agendar-cita" class="py-5">
    <div class="form-container">
        <h2>Agenda tu Cita</h2>
        <form id="formCita">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" id="hora" name="hora" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrar Cita</button>
        </form>
    </div>
</section>


<!-- Incluir SweetAlert2 desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.getElementById('formCita').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('guardar_cita.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    Swal.fire({
      title: '¡Cita registrada con éxito!',
      text: 'Te contactaremos para confirmar tu cita.',
      icon: 'success',
      background: '#1e293b',
      color: '#e0f7ff',
      iconColor: '#00c8ff',
      confirmButtonColor: '#00c8ff',
      confirmButtonText: 'Ir al inicio',
      customClass: {
        title: 'swal-title-atom',
        popup: 'swal-popup-atom',
      }
    }).then(() => {
      window.location.href = 'index.php';
    });
  })
  .catch(error => {
    Swal.fire({
      title: 'Error',
      text: 'No se pudo registrar tu cita. Intenta de nuevo.',
      icon: 'error',
      background: '#1e293b',
      color: '#e0f7ff',
      iconColor: '#ff4c4c',
      confirmButtonColor: '#00c8ff',
    });
  });
});
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
