<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | ATOM</title>
    <link rel="stylesheet" href="fate.css">
    <link rel="stylesheet" href="nosotros.css">
    <link rel="stylesheet" href="chatbot.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="icon" href="image/logopes.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

  <header id="navbar" class="navbar" style="position: fixed;">
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
<style>
   h1 {
  font-size: 5rem;
  color: #168ed9;;
  font-weight: 700;
}

</style>

<section class="sobrenosotros-section" data-aos="fade-up">
  <div class="nosotros-contenido">
    <!-- Lado izquierdo -->
    <div class="info-nosotros" data-aos="fade-left">
      <h1 >NOSOTROS</h1>
      <span class="subtitulo">Ariel Perales - Fundador de ATOM</span>
      <p class="descripcion">
        Ariel Perales es un reconocido ingeniero mecatrónico de la ciudad de Saltillo, fundador de la empresa de automatización ATOM, quien con más de 10 años de experiencia en la industria se ha destacado por el desarrollo de proyectos de plantas industriales como MAHLE, MAGNA, JOHN DEERE, MARTINREA, entre otras fábricas integrando las áreas de diseño industrial, mecánica, electrónica y robótica para los parques de Derramadero, Ramos Arizpe, Arteaga, Apodaca, Santa Catarina y Monterrey.

Ariel Perales es además un experto en el funcionamiento de los componentes mecánicos, eléctricos, electrónicos y computacionales de los procesos, es por esto que múltiples plantas industriales de Saltillo y Monterrey confían en su capacidad de seleccionar los mejores métodos y tecnologías para el diseño y desarrollo integral de la automatización de sus procesos, diseñados a través de su empresa ATOM, que desarrolla procesos funcionales, de calidad y con alto desempeño.
      </p><br>
      <a href="https://wa.me/528446226979" target="_blank"><button class="boton-transparentee">Contactanos</button></a>
    </div>

    <!-- Lado derecho -->
    <div class="imagen-nosotros" data-aos="fade-right">
      <img src="image/ariel.jpg" alt="Ariel Perales - Fundador de ATOM">
    </div>
  </div>
</section>


<section class="quienes-somos" data-aos="fade-up" > 
  <div class="contenedor">
    <h3 class="styled-title text-center">Conoce más de ATOM</h3>

    <div class="contenido-quienes">
      <!-- Columna izquierda: imagen -->
      <div class="columna-imagen" data-aos="fade-right">
        <img src="image/nosotros-1.jpg" alt="Equipo de ATOM">
      </div>

      <!-- Columna derecha: información -->
      <div class="columna-texto" data-aos="fade-left">
        <p><strong>ATOM</strong> es una empresa de Automatización Industrial ubicada en Saltillo, que brinda soporte en:</p>
        <ul>
          <li>Diseño y maquinado industrial CNC</li>
          <li>Fabricación de Fixtures, Gages y Moldes</li>
          <li>Programación de PLCs</li>
          <li>Capacitación en SolidWorks</li>
        </ul>

        <p>Contamos con ingenieros mecatrónicos expertos en integrar sistemas automatizados que combinan:</p>
        <ul>
          <li>Mecánica de precisión</li>
          <li>Electrónica</li>
          <li>Control automático</li>
          <li>Diseño de procesos industriales</li>
        </ul>

        <p>Empresas de <strong>Saltillo, Ramos Arizpe, Apodaca, Monterrey</strong> y más, confían en ATOM para optimizar sus procesos con soluciones innovadoras y eficientes.</p>
        <br><a href="https://wa.me/528446226979" target="_blank"><button class="boton-transparentee">Contactanos</button></a>
      </div>
    </div>

    <!-- Tarjetas de servicios -->
    <div class="servicios-grid">
      <div class="servicio" data-aos="zoom-in">
        <i class="fas fa-cogs"></i>
        <p>Diseño y maquinado CNC</p>
      </div>
      <div class="servicio" data-aos="zoom-in">
        <i class="fas fa-tools"></i>
        <p>Fabricación de Fixtures, Gages y Moldes</p>
      </div>
      <div class="servicio" data-aos="zoom-in">
        <i class="fas fa-microchip"></i>
        <p>Programación PLC</p>
      </div>
      <div class="servicio" data-aos="zoom-in">
        <i class="fas fa-chalkboard-teacher"></i>
        <p>Capacitación en SolidWorks</p>
      </div>
    </div>
  </div>
</section>


<section class="ventajas-atom" data-aos="fade-up" style="margin-top: 80px;">
  <h3 class="styled-title text-center">¿Por qué las empresas confían en ATOM?</h3>
  <div class="cards-container">
    <div class="card" data-aos="zoom-in-up">
      <i class="fas fa-cogs"></i>
      <h4>Automatización eficiente</h4>
      <p>Soluciones de alta precisión para procesos productivos ágiles y fiables.</p>
    </div>
    <div class="card" data-aos="zoom-in-up">
      <i class="fas fa-robot"></i>
      <h4>Expertos en mecatrónica</h4>
      <p>Integramos electrónica, control, diseño y programación con visión industrial.</p>
    </div>
    <div class="card" data-aos="zoom-in-up">
      <i class="fas fa-map-marker-alt"></i>
      <h4>Presencia regional</h4>
      <p>Atendemos empresas en Saltillo, Monterrey, Ramos Arizpe, Apodaca y más.</p>
    </div>
    <div class="card" data-aos="zoom-in-up">
      <i class="fas fa-chalkboard-teacher"></i>
      <h4>Capacitación sólida</h4>
      <p>Formamos ingenieros con herramientas como SolidWorks para optimizar sus procesos.</p>
    </div>
  </div>
</section>


<section class="cta-contacto" data-aos="fade-up">
  <h3 class="styled-title" style="color: white;">¿Listo para automatizar tus procesos?</h3>
  <p>Contáctanos y recibe el respaldo técnico de una empresa confiable en automatización industrial.</p>
  <a href="https://wa.me/528446226979" target="_blank" class="btn-principal">Contáctanos</a>
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
          <a href="https://www.facebook.com/share/1B3hc5nK13/" target="_blank"><i class="bi bi-facebook"></i></a>
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


<!-- AOS y Font Awesome -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



</body>