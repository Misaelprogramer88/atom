<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso Intermedio-Avanzado |ATOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fate.css">
    <link rel="stylesheet" href="cursos.css">
    <link rel="stylesheet" href="chatbot.css">
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

      <div class="dropdown-atom">
        <span class="dropdown-toggle-atom">Cursos ▾</span>
        <ul class="dropdown-menu-atom">
          <li><a href="cursob-i.php">Solidworks Básico – Intermedio</a></li>
          <li><a href="cursos.php">Solidworks Intermedio – Avanzado</a></li>
          <li><a href="cursomastercam.php">Mastercam Basico – Intermedio</a></li>
        </ul>
      </div>
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

<!-- Sección HERO -->
<section class="seccion-slide hero">
  <div class="container">
    <div class="contenido-interno">
      <div class="row align-items-center">
        <!-- Izquierda -->
        <div class="col-12 col-md-6 hero-left">
          <h1 data-aos="fade-right" data-aos-delay="300" style="margin-top: 40px">MASTERCAM - CNC</h1>
          <h3 data-aos="fade-right" data-aos-delay="500" style="margin-top: 40px">Capacitación profesional en programación CNC y manufactura</h3>
          <p data-aos="fade-right" data-aos-delay="700" style="margin-top: 40px">
            Aprende códigos G y M, simulación CNC, selección de herramentales, manufactura en torno y fresadora, además de programación en Mastercam con integración CAD. Disponible en modalidad presencial, virtual y para empresas.
          </p>
          <br><a href="https://wa.me/528446226979" target="_blank"><button class="boton-transparentee" data-aos="fade-right" data-aos-delay="900">Contáctanos</button></a>
        </div>

        <!-- Derecha -->
        <div class="col-12 col-md-6 hero-right text-center mt-5" data-aos="fade-down-left">
          <video autoplay muted loop playsinline class="video-hero">
            <source src="image/mastercam.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
          </video>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="tematica" class="timeline-section py-5">
  <div class="container">
    <h2 class="text-center mb-5">¿Cuál es la temática del curso de Mastercam?</h2>
    <div class="row">

      <!-- Línea del tiempo (izquierda) -->
      <div class="col-md-7">
        <div class="timeline">

          <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <h5>1. Introducción al entorno de CNC</h5>
              <p>Sistemas de unidades, planos cartesianos, coordenadas y comandos básicos G y M para programación CNC.</p>
            </div>
          </div>

          <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <h5>2. Elaboración de códigos G y M</h5>
              <p>Interpretación y ejecución de trayectorias en torno y fresadora CNC con coordenadas y ecuaciones de desplazamiento.</p>
            </div>
          </div>

          <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <h5>3. Introducción al software CNC Simulator</h5>
              <p>Simulación de piezas en torno y fresadora, exportación de códigos G y M, y diagnóstico de errores.</p>
            </div>
          </div>

          <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <h5>4. Introducción a herramentales</h5>
              <p>Selección de herramientas, geometrías comunes y estudio de materiales para parámetros de corte.</p>
            </div>
          </div>

          <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <h5>5. Introducción al entorno de Mastercam</h5>
              <p>Interfaz, integración con CAD, puesta a punto cero, elección de herramientas, simulación, obtención y exportación de códigos G.</p>
            </div>
          </div>

        </div>
      </div>

      <!-- Galería de imágenes (derecha) -->
      <div class="col-md-5 d-none d-md-block">
        <div class="timeline-gallery" >
          
          <img src="image/mastercam.avif"  data-aos="fade-left" class="img-fluid mb-3 rounded shadow-sm" alt="Torno CNC en Mastercam">
          <img src="image/mastercam2.webp" data-aos="fade-left" data-aos-delay="500"  class="img-fluid rounded shadow-sm" alt="Fresadora CNC en Mastercam">
        </div>
      </div>

    </div>
  </div>
</section>


<section id="duracion" class="duracion-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">¿Cuánto dura el curso de SOLIDWORKS?</h2>
    <p class="text-center mb-5 lead">El curso tiene una duración de <strong>15 a 18 horas</strong> y puedes tomarlo en distintos horarios, entre semana o en sábados.</p>

    <div class="row g-4 justify-content-center">

      <!-- Entre semana -->
      <div class="col-md-5" data-aos="zoom-in">
        <div class="card horario-card h-100">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-calendar-week"></i> Horarios entre semana</h5>
            <ul class="list-unstyled mt-3">
              <li>🕘 8:00 am – 11:00 am</li>
              <li>🕙 10:00 am – 1:00 pm</li>
              <li>🕚 11:00 am – 2:00 pm</li>
              <li>🕔 5:00 pm – 8:00 pm</li>
              <li>🕕 6:00 pm – 9:00 pm</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Sabatinos -->
      <div class="col-md-5" data-aos="zoom-in" data-aos-delay="150">
        <div class="card horario-card h-100">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-calendar-event"></i> Horarios sabatinos</h5>
            <ul class="list-unstyled mt-3">
              <li>🕘 9:00 am – 1:00 pm</li>
              <li>🕙 10:00 am – 2:00 pm</li>
              <li>🕚 11:00 am – 3:00 pm</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="modalidad" class="modalidad-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">¿Qué modalidad tiene el curso?</h2>
    <p class="text-center lead mb-5">Nos adaptamos a tu tiempo y ubicación. Ofrecemos diferentes formas de cursar SolidWorks según tus necesidades.</p>

    <div class="row g-4 text-center">

      <!-- Modalidad virtual -->
      <div class="col-md-4" data-aos="fade-up">
        <div class="card modalidad-card h-100">
          <div class="card-body">
            <div class="icon mb-3">
              <i class="bi bi-laptop" style="font-size: 2.5rem; color: #168ed9;"></i>
            </div>
            <h5 class="card-title">Curso Virtual</h5>
            <p>Estudia desde cualquier parte de México o el mundo. Ideal si tienes restricciones de tiempo o movilidad.</p>
          </div>
        </div>
      </div>

      <!-- Modalidad presencial -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
        <div class="card modalidad-card h-100">
          <div class="card-body">
            <div class="icon mb-3">
              <i class="bi bi-building" style="font-size: 2.5rem; color: #0d6efd;"></i>
            </div>
            <h5 class="card-title">Curso Presencial</h5>
            <p>Clases en Saltillo con instructores certificados. Ideal para aprendizaje práctico en aula.</p>
          </div>
        </div>
      </div>

      <!-- Para empresas -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card modalidad-card h-100">
          <div class="card-body">
            <div class="icon mb-3">
              <i class="bi bi-briefcase" style="font-size: 2.5rem; color: #0b4986;"></i>
            </div>
            <h5 class="card-title">Para Empresas</h5>
            <p>Impartimos cursos en cualquier ciudad de México. Ideal para talleres de maquinado industrial y personal técnico.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



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
  href="https://wa.me/528446226979"
  class="whatsapp-float"
  target="_blank"
  rel="noopener"
  aria-label="Chat en WhatsApp"
>
  <i class="fab fa-whatsapp"></i>
</a>



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
          <a href="https://wa.me/528446226979" target="_blank"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <!-- Contacto -->
        
        <div class="col-md-3 mb-4 mb-md-0">
          <h5 class="footer-title">Contacto</h5>
          <hr class="footer-line">
          <p style="font-size: 0.9rem;">
            <a href="mailto:ariel.perales@disenoymaquinados.mx" class="footer-link">
              <i class="bi bi-envelope"></i> ariel.perales@disenoymaquinados.mx
            </a>
          </p>
          <p style="font-size: 0.9rem;">
            <a href="mailto:ventas@disenoymaquinados.mx" class="footer-link">
              <i class="bi bi-envelope"></i> ventas@disenoymaquinados.mx
            </a>
          </p>
          <p style="font-size: 0.9rem;">
            <i class="bi bi-telephone"></i> +52 (844) 622 6979
          </p>
          <p style="font-size: 0.9rem;">
            <a href="https://wa.me/528446226979" target="_blank" class="footer-link">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </p>
        </div>




      <!-- Más Información -->
      <div class="col-md-3">
        <h5 class="footer-title">Más Información</h5>
        <hr class="footer-line">
        <ul class="list-unstyled">
          <li><a href="#" onclick="abrirModalAdmin()">Admin</a></li>
        </ul>
      </div>

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
      © Copyright 2025 ATOM. All Rights Reserved. Made by <span style="color: #FFD700;">Tuweb - DesarrolloWEB</span>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>