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
    <link rel="stylesheet" href="chatbot.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="image/ATOM LOGO.png" type="image/x-icon">

    <style>
      .services-section {
  padding: 4rem 0;
  
}

.service-card-clean {
  background-color: #1e293b;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s, box-shadow 0.3s;
  color: white;
}

.service-card-clean:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 24px rgba(0, 187, 255, 0.4);
}

.service-card-clean img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.service-card-clean .card-body {
  padding: 1.2rem;
}

.service-card-clean h5 {
  font-size: 1.3rem;
  margin-bottom: 0.6rem;
  color: #1cc5dc;
}

.service-card-clean p {
  font-size: 0.95rem;
  color: #cfd8dc;
}

.btn-ver-mas {
  display: inline-block;
  margin-top: 10px;
  padding: 6px 14px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #1cc5dc;
  border: 1px solid #1cc5dc;
  border-radius: 20px;
  background-color: transparent;
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn-ver-mas:hover {
  background-color: #1cc5dc;
  color: white;
  box-shadow: 0 0 8px rgba(28, 197, 220, 0.5);
}


    </style>
</head>
<body>

    

<div class="parallax-section">
    <video autoplay muted loop playsinline class="video-fondo" id="parallaxVideo">
        <source src="image/fondo.mp4" type="video/mp4">
        Tu navegador no soporta el video.
    </video>
    
    
</div>

<script>
    window.addEventListener("scroll", function () {
        const scrollPos = window.scrollY;
        const video = document.getElementById("parallaxVideo");
        video.style.transform = `translateY(${scrollPos * 0.3}px)`; // Ajusta 0.3 si quieres más o menos movimiento
    });
</script>


 <!-- 🔁 Trigger invisible justo antes de la navbar -->
  <div id="trigger" style="height: 0px;"></div>

  <!-- ✅ Navbar (se ve normal al inicio) -->
  <header id="navbar" class="navbar">
  <div class="navbar-container">
    <div class="navbar-logo">
      <img src="image/LetrasAzul.png" alt="Logo" >

    </div>

    <div class="menu-toggle" id="menu-toggle">
      ☰
    </div>

    <nav class="navbar-links" id="navbar-links">
  <div class="dropdown-atom">
    <span class="dropdown-toggle-atom">Servicios ▾</span>
    <ul class="dropdown-menu-atom">
      <li><a href="diseños_piezas.html">Diseño de Piezas</a></li>
      <li><a href="maquinado_cnc.html">Maquinado CNC</a></li>
      <li><a href="fabricacion_fixtures.html">Fixtures</a></li>
      <li><a href="automatizacion.html">Automatización</a></li>
      <li><a href="programacion_plc.html">Programación PLC</a></li>
      <li><a href="diseño_web.html">Diseño Web</a></li>
      
    </ul>
  </div>
  <a href="nosotros.php">Nosotros</a>
  
  

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









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    
<section id="about" class="py-5" style=" background: linear-gradient(to right,rgb(247, 245, 245),rgb(214, 233, 247),rgb(255, 255, 255)); color: rgb(5, 5, 5); position: relative;">
    <div class="container text-center">
        <h2 class="styled-title text-center">Sobre Nosotros</h2>

        <p class="lead" style="font-size: 1.2rem; line-height: 1.8; ">
            ATOM es reconocido como uno de los mejores proveedores de automatización industrial en la región, <br> nuestra empresa se distingue por su enfoque integral en el diseño, desarrollo y puesta en marcha de <br>soluciones personalizadas. Nos especializamos en garantizar la eficiencia operativa, optimizar los <br> costos de producción y elevar la calidad de los productos terminados, ofreciendo un servicio que <br> trasciende las expectativas del cliente y contribuye al éxito sostenible de sus operaciones.
        </p>
        
        <section class="stats-section">
            <div class="container text-center">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-item" style="height: 240px;">
                        <i class="bi bi-calendar-check stat-icon"></i>
                        <div class="stat-number">6</div>
                        <div class="stat-label">Años de Servicio</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <i class="bi bi-person-check stat-icon"></i>
                        <div class="stat-number">+20</div>
                        <div class="stat-label">Especialistas en Diseño y Automatización</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <i class="bi bi-bar-chart-line stat-icon"></i>
                        <div class="stat-number">+30</div>
                        <div class="stat-label">Proyectos Realizados</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <i class="bi bi-award stat-icon"></i>
                        <div class="stat-number">+480</div>
                        <div class="stat-label">Profesionales Capacitados en CAD</div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </div>
</section>


<section id="servicios" class="services-section">
  <div class="container">
    <h2 class="styled-title text-center mb-5">Nuestros Servicios</h2>
    <div class="row g-4">

      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card-clean">
          <img src="image/servicio 1 piezas.png" alt="Diseño de Piezas">
          <div class="card-body">
            <h5>Diseño de Piezas</h5>
            <p>Realizamos el diseño de piezas mecánicas con precisión y calidad.</p>
            <a href="diseños_piezas.html" class="btn-ver-mas">Ver más</a>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card-clean">
          <img src="image/servicio 2.png" alt="Maquinado CNC">
          <div class="card-body">
            <h5>Maquinado Industrial CNC</h5>
            <p>Trabajamos maquinados industriales CNC en Saltillo y Monterrey.</p>
            <a href="maquinado_cnc.html" class="btn-ver-mas">Ver más</a>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card-clean">
          <img src="image/servicio 3.png" alt="Fixtures">
          <div class="card-body">
            <h5>Fabricación de Fixtures</h5>
            <p>Apoyamos a distintas maquiladoras en la fabricación de fixtures personalizados.</p>
            <a href="fabricacion_fixtures.html" class="btn-ver-mas">Ver más</a>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card-clean">
          <img src="image/servicio 4.png" alt="Automatización">
          <div class="card-body">
            <h5>Servicio de Automatización</h5>
            <p>Automatizamos líneas para mejorar la productividad de las empresas.</p>
            <a href="automatizacion.html" class="btn-ver-mas">Ver más</a>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card-clean">
          <img src="image/servicio 5.png" alt="PLC">
          <div class="card-body">
            <h5>Programación PLC</h5>
            <p>Ofrecemos programación de PLC, incluyendo PLC SIEMENS, con alta eficiencia.</p>
            <a href="programacion_plc.html" class="btn-ver-mas">Ver más</a>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card-clean">
          <img src="image/servicio 6.png" alt="TuWeb">
          <div class="card-body">
            <h5>TuWeb</h5>
            <p>Desarrollamos páginas web, logos e imágenes publicitarias para tu negocio.</p>
            <a href="" class="btn-ver-mas">Ver más</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<section id="cursos" class="py-5 bg-light" style=" background: linear-gradient(to right,rgb(247, 245, 245),rgb(214, 233, 247),rgb(255, 255, 255)); color: rgb(5, 5, 5); position: relative;">
  <div class="container">
    <h2 class="text-center mb-4 styled-title text-center" data-aos="fade-up">Nuestros Cursos de SOLIDWORKS</h2>
    <p class="text-center mb-5 text-muted" data-aos="fade-up" data-aos-delay="100">
      Elige el curso que se adapte a tu nivel y modalidad. Capacitación profesional para la industria.
    </p>

    <div class="row justify-content-center">

      <!-- Curso Básico-Intermedio -->
      <div class="col-md-6 col-lg-4 mb-4" data-aos="zoom-in">
        <div class="curso-card">
          <img src="https://cdn.prod.website-files.com/5fcde6f56fdac5414b34eeb3/6422b76aabc618b7492c253c_Solidworks.png" alt="Curso Básico" class="curso-img">
          <div class="curso-content">
            <h5>SolidWorks Básico - Intermedio</h5>
            <p>Aprende modelado 3D, operaciones básicas, planos técnicos y animaciones simples.</p>
            <a href="cursob-i.php" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>

      <!-- Curso Intermedio-Avanzado -->
      <div class="col-md-6 col-lg-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="curso-card">
          <img src="https://www.solidworks.com/sites/default/filesd10/styles/webp/public/2025-01/Nemo2.jpg.webp?itok=MeFOakVP" alt="Curso Avanzado" class="curso-img">
          <div class="curso-content">
            <h5>SolidWorks Intermedio - Avanzado</h5>
            <p>Domina lectura de planos, GD&T, engranajes, simulaciones y diseño avanzado.</p>
            <a href="cursos.php" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>

      <!-- Cursos dinámicos desde la base de datos -->
      <?php
      

      try {
        $query = $cnnPDO->query("SELECT * FROM cursos ORDER BY id DESC");

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
          // Convertir imagen BLOB a base64
          $imagenSrc = 'data:image/jpeg;base64,' . base64_encode($row['imagen']);

          echo '
          <div class="col-md-6 col-lg-4 mb-4" data-aos="zoom-in">
            <div class="curso-card">
              <img src="'.$imagenSrc.'" alt="'.htmlspecialchars($row['titulo']).'" class="curso-img">
              <div class="curso-content">
                <h5>'.htmlspecialchars($row['titulo']).'</h5>
                <p>'.htmlspecialchars($row['descripcion']).'</p>
                <a href="#" class="btn btn-primary">Ver más</a>
              </div>
            </div>
          </div>';
        }
      } catch (PDOException $e) {
        echo '<p class="text-danger text-center">Error al cargar cursos: '.$e->getMessage().'</p>';
      }
      ?>

    </div>
  </div>
</section>


<section class="bloque-asistente">
  <div class="contenido-info" style="text-align: justify;">
    <h2 class="styled-title text-center">Hacemos Realidad tus ideas.</h2>
    <p>¿Tienes dudas sobre el curso? Nuestro asistente virtual está disponible 24/7 para ayudarte con preguntas frecuentes, requisitos, duración y más.</p>
    <p>
      ATOM es una empresa en Saltillo especializada en Automatización Industrial. Ofrece servicios de diseño y maquinado CNC, fabricación de moldes y fixtures, programación PLC y capacitación en SolidWorks.
    </p>
    <p>
      Cuenta con un equipo experto en Ingeniería Mecatrónica, que desarrolla sistemas automatizados para distintos sectores, mejorando la eficiencia de los procesos productivos.
    </p>
    <p>
      Además, usan software 3D para diseñar y modelar piezas antes de su fabricación, asegurando precisión y funcionalidad. Sectores como la ingeniería, el diseño industrial y la animación 3D requieren este tipo de programación para interpretar piezas detalladamente.
    </p>
</div>

</section>
<section class="bloque-empresas">
  <div class="empresas-recomiendan">
    <h3>EMPRESAS QUE NOS RECOMIENDAN </h3>
    <p class="descripcion-empresas">
      Estas son algunas de las empresas que confían en nuestro trabajo y capacitación.
    </p>
    <div class="logos-empresas">
      <img src="image/e1.png" alt="Empresa 1" data-aos="fade-up" data-aos-delay="">
      <img src="image/e2.png" alt="Empresa 2" data-aos="fade-up" data-aos-delay="200">
      <img src="image/e3.png" alt="Empresa 3" data-aos="fade-up" data-aos-delay="400">
      <img src="image/e4.png" alt="Empresa 4" data-aos="fade-up" data-aos-delay="600">
    </div>
  </div>
</section>











<!-- Incluye Bootstrap Icons para los íconos -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <section id="contact" class="py-5" style=" background: linear-gradient(to right,rgb(247, 245, 245),rgb(214, 233, 247),rgb(255, 255, 255)); color: rgb(5, 5, 5); position: relative;">
        <div class="container text-center">
            <h2>Contacto</h2>
            <p class="lead">Ponte en contacto con nosotros para más información.</p>
            <form class="mt-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" required>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Mensaje" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>


    
<section id="agendar" class="py-5" style="background: linear-gradient(to right, #203a43, #2c5364); color: white;">
    <div class="container text-center">
        <h3 style="font-size: 1.8rem; font-weight: bold; margin-bottom: 1rem;">Agenda tu Cita</h3>
        <p style="font-size: 1rem; margin-bottom: 2rem;">
            Haz clic en el botón de abajo para programar una cita con nosotros y recibir atención personalizada.
        </p>
        <a href="citas.php" class="btn btn-primary btn-lg">
            Agendar Cita
        </a>
    </div>
</section>







    





</div>






<!-- Botón flotante con logo -->
<button id="chat-toggle">
  <img src="image/LogoBlanco.png" alt="Chat" style="width: 32px; height: 32px;">
</button>
<!-- Mensaje flotante del asistente -->
<div id="chat-label">Hola, soy tu asistente virtual de Atom</div>



<!-- Contenedor del chat -->
<div id="chat-container">
  <!-- Encabezado del chat con logo -->
<div id="chat-header">
  <img src="image/LogoBlanco.png" alt="Logo" style="height: 26px; vertical-align: middle; margin-right: 10px;">
  Asistente de Atom
</div>

  <div id="chat-log"></div>
  <div id="chat-input-area">
    <input type="text" id="chat-input" placeholder="Escribe tu pregunta...">
    <button id="send-btn">Enviar</button>
  </div>
</div>

<!-- Script del chatbot -->
<script>
  const toggleBtn = document.getElementById('chat-toggle');
  const chatContainer = document.getElementById('chat-container');
  const input = document.getElementById('chat-input');
  const log = document.getElementById('chat-log');
  const btn = document.getElementById('send-btn');

  // Mostrar/Ocultar el chatbot
  toggleBtn.addEventListener('click', () => {
    chatContainer.style.display = chatContainer.style.display === 'flex' ? 'none' : 'flex';
  });

  // Enviar pregunta
  btn.addEventListener('click', enviarPregunta);
  input.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') enviarPregunta();
  });

  function enviarPregunta() {
    const pregunta = input.value.trim();
    if (!pregunta) return;

    agregarMensaje('👤 Tú', pregunta);
    input.value = '';
    input.disabled = true;
    btn.disabled = true;

    fetch('chat.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ mensaje: pregunta })
    })
    .then(res => res.json())
    .then(data => {
      agregarMensaje('🤖 Bot', data.respuesta);
      input.disabled = false;
      btn.disabled = false;
      input.focus();
    })
    .catch(() => {
      agregarMensaje('⚠️ Bot', 'Error al conectar con el servidor.');
      input.disabled = false;
      btn.disabled = false;
    });
  }

  function agregarMensaje(quien, texto) {
  const div = document.createElement('div');
  const esUsuario = quien.includes('Tú');
  div.className = 'chat-msg ' + (esUsuario ? 'chat-user' : 'chat-bot');
  div.innerHTML = texto;
  log.appendChild(div);
  log.scrollTop = log.scrollHeight;
}


const chatLabel = document.getElementById('chat-label');

// Mostrar al cargar y ocultar a los 5 segundos
setTimeout(() => {
  chatLabel.style.opacity = 0;
}, 5000);

// Mostrar al pasar mouse y ocultar a los 2 segundos
let hideTimeout;
toggleBtn.addEventListener('mouseenter', () => {
  chatLabel.style.opacity = 1;

  clearTimeout(hideTimeout);
  hideTimeout = setTimeout(() => {
    chatLabel.style.opacity = 0;
  }, 2000);
});

toggleBtn.addEventListener('mouseleave', () => {
  clearTimeout(hideTimeout);
  hideTimeout = setTimeout(() => {
    chatLabel.style.opacity = 0;
  }, 2000);
});



</script>


<a
  href="https://wa.me/521XXXXXXXXXX"
  class="whatsapp-float"
  target="_blank"
  rel="noopener"
  aria-label="Chat en WhatsApp"
>
  <i class="fab fa-whatsapp"></i>
</a>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
    <footer class="footer-dark" style="background-color: black;">
  <div class="container py-5">
    <div class="row text-white">

      <!-- Logo -->
      <div class="col-md-3 mb-4 mb-md-0 text-center text-md-start">
        <img src="image/ATOM LOGO.png" alt="ATOM Logo" style="width: 120px;">
      </div>

      <!-- Nuestras redes -->
      <div class="col-md-3 mb-4 mb-md-0">
        <h5 class="footer-title">Nuestras Redes</h5>
        <hr class="footer-line">
        <div class="footer-icons">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
          <a href="#"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <!-- Contacto -->
      <div class="col-md-3 mb-4 mb-md-0">
        <h5 class="footer-title">Contacto</h5>
        <hr class="footer-line">
        <p><i class="bi bi-envelope"></i> ariel.perales@disenoymaquinados.mx</p>
        <p><i class="bi bi-envelope"></i> ventas@disenoymaquinados.mx</p>
        <p><i class="bi bi-telephone"></i> +52 (844) 622 6979</p>
        <p><i class="bi bi-whatsapp"></i> WhatsApp</p>
      </div>

      <!-- Más Información -->
      <!-- Enlace en el footer -->
      <div class="col-md-3">
        <h5 class="footer-title">Más Información</h5>
        <hr class="footer-line">
        <ul class="list-unstyled">
          <li><a href="#" onclick="abrirModalAdmin()">Admin</a></li>
        </ul>
      </div>

      <!-- Modal de acceso admin -->
      <!-- Modal de acceso admin -->
        <div id="modalAdmin" class="modal-admin">
          <div class="modal-admin-content">
            <div class="modal-header">
              <img src="image/ATOM LOGO.png" alt="Logo" class="modal-logo">
              <h4>Acceso de Administrador</h4>
              <span class="close" onclick="cerrarModalAdmin()">&times;</span>
            </div>
            <div class="modal-body">
              
              <input type="password" id="claveAdmin" placeholder="Introduce la clave" />
              <button onclick="validarClaveAdmin()">Entrar</button>
              <p id="errorClave" class="error-text">Clave incorrecta</p>
            </div>
          </div>
        </div>



    </div>

    <!-- Créditos -->
    <div class="text-center text-white mt-4 small">
      © Copyright 2021 ATOM. All Rights Reserved. Made by <span style="color: #FFD700;">Dark Post Marketing Agency</span>
    </div>
  </div>
</footer>

<script>
  const claveCorrecta = "123"; // Cambia esto por la clave que tú quieras

  function abrirModalAdmin() {
    document.getElementById("modalAdmin").style.display = "block";
    document.getElementById("claveAdmin").value = "";
    document.getElementById("errorClave").style.display = "none";
  }

  function cerrarModalAdmin() {
    document.getElementById("modalAdmin").style.display = "none";
  }

  function validarClaveAdmin() {
    const claveIngresada = document.getElementById("claveAdmin").value;

    if (claveIngresada === claveCorrecta) {
      window.location.href = "admin.php";
    } else {
      document.getElementById("errorClave").style.display = "block";
    }
  }

  // Cerrar modal al hacer clic fuera del contenido
  window.onclick = function (event) {
    const modal = document.getElementById("modalAdmin");
    if (event.target === modal) {
      cerrarModalAdmin();
    }
  };
</script>


<!-- Asegúrate de incluir Font Awesome en tu <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<script>
    // Intersection Observer para animar las imágenes al hacer scroll
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll('.fade-in');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target); // Dejar de observar después de que la imagen aparezca
                }
            });
        }, { threshold: 0.1 });

        images.forEach(image => {
            observer.observe(image);
        });
    });
    </script>



    <script>
        // Selecciona todos los elementos con la clase 'fade-in-slide'
const fadeInElements = document.querySelectorAll('.fade-in-slide');

function checkVisibility() {
    fadeInElements.forEach((element) => {
        // Verifica si el elemento está en el viewport
        const rect = element.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) { // 100px antes de que llegue al viewport completo
            element.classList.add('show');
        }
    });
}

// Ejecuta la función en scroll
window.addEventListener('scroll', checkVisibility);

// Ejecuta la función inicialmente para elementos que ya están visibles
checkVisibility();

    </script>

    <script>
        // Selecciona todos los elementos con la clase 'zoom-in'
const zoomInElements = document.querySelectorAll('.zoom-in');

function checkZoomVisibility() {
    zoomInElements.forEach((element) => {
        // Verifica si el elemento está en el viewport
        const rect = element.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) { // 100px antes de que entre al viewport completo
            element.classList.add('show');
        }
    });
}

// Ejecuta la función en scroll
window.addEventListener('scroll', checkZoomVisibility);

// Ejecuta la función inicialmente para elementos que ya están visibles
checkZoomVisibility();

    </script>

    <script>
        // Selecciona todos los elementos con la clase 'slide-in-left'
const slideInElements = document.querySelectorAll('.slide-in-left');

function checkSlideVisibility() {
    slideInElements.forEach((element) => {
        // Verifica si el elemento está en el viewport
        const rect = element.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) { // 100px antes de que entre al viewport completo
            element.classList.add('show');
        }
    });
}

// Ejecuta la función en scroll
window.addEventListener('scroll', checkSlideVisibility);

// Ejecuta la función inicialmente para elementos que ya están visibles
checkSlideVisibility();

    </script>



 <script>
  function ajustarAlturaParallax() {
    const navbar = document.getElementById('navbar');
    const parallax = document.getElementById('parallax');
    const alturaNavbar = navbar.offsetHeight;

    // Resta la altura real de la navbar al 100% de la pantalla
    parallax.style.height = `calc(100vh - ${alturaNavbar}px)`;
  }

  // Llama al cargar y al redimensionar
  window.addEventListener('load', ajustarAlturaParallax);
  window.addEventListener('resize', ajustarAlturaParallax);
</script>

<script>
  function ajustarAlturaParallax() {
    const navbar = document.getElementById('navbar');
    const parallax = document.querySelector('.parallax-section');

    if (navbar && parallax) {
      // Esperamos unos ms para asegurar que se renderice bien la navbar
      setTimeout(() => {
        const alturaNavbar = navbar.offsetHeight;
        parallax.style.height = `calc(100dvh - ${alturaNavbar}px)`;
      }, 50);
    }
  }

  // Ejecutar cuando todo esté bien cargado
  window.addEventListener('load', ajustarAlturaParallax);
  window.addEventListener('resize', ajustarAlturaParallax);
</script>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>




</body>
</html>













