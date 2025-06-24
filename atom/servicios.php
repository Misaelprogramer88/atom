<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="image/ATOM LOGO.png" type="image/x-icon">

    <style>
        .service-section {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: white;
            padding: 4rem 0;
        }
        .service-card {
            background: white;
            color: #2c5364;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            padding: 2rem;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .service-card i {
            font-size: 3rem;
            color: #1cc5dc;
            margin-bottom: 1rem;
        }
        .service-card h5 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        .service-card p {
            font-size: 1rem;
            color: #6c757d;
        }

    </style>
    

</head>
<body>


 <!-- 🔁 Trigger invisible justo antes de la navbar -->
  <div id="trigger" style="height: 0px;"></div>

  <!-- ✅ Navbar (se ve normal al inicio) -->
  <header id="navbar" class="navbar">
  <div class="navbar-container">
    <div class="navbar-logo">
      <img src="image/ATOM LOGO.png" alt="Logo" style="margin-right: 20px;"/>
    </div>

    <div class="menu-toggle" id="menu-toggle">
      ☰
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






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    
    <section id="servicios" class="service-section">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Servicios</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-gear"></i>
                        <h5>Diseño de Piezas</h5>
                        <p>Realizamos el diseño de piezas mecánicas con precisión y calidad.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-hammer"></i>
                        <h5>Maquinado Industrial CNC</h5>
                        <p>Trabajamos maquinados industriales CNC en Saltillo y Monterrey.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-tools"></i>
                        <h5>Fabricación de Fixtures</h5>
                        <p>Apoyamos a distintas maquiladoras en la fabricación de fixtures personalizados.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-lightning"></i>
                        <h5>Servicio de Automatización</h5>
                        <p>Automatizamos líneas para mejorar la productividad de las empresas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="bi bi-cpu"></i>
                        <h5>Programación PLC</h5>
                        <p>Ofrecemos programación de PLC, incluyendo PLC SIEMENS, con alta eficiencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
    <footer class="footer">
    <p>&copy; 2024 SIR Mantiene. Todos los derechos reservados.</p>
    <div class="social">
        <a href="mailto:tuemail@ejemplo.com" title="Enviar correo">
            <i class="fas fa-envelope"></i>
        </a>
        <a href="https://wa.me/8442133787" target="_blank" title="Enviar WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
       
    </div>
    <div class="footer-services">
        <!-- Aquí puedes agregar más enlaces de servicios si lo deseas -->
    </div>
    </footer>

<!-- Asegúrate de incluir Font Awesome en tu <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




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













