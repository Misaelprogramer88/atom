<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | ATOM</title>
    <link rel="stylesheet" href="fate.css">
    <link rel="stylesheet" href="nosotros.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

  <header id="navbar"  class="navbar sticky-top shadow-sm">
  <div class="navbar-container">
    <div class="navbar-logo">
      <a href="index.php"><img src="image/LetrasAzul.png" alt="Logo" ></a>

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
      <li><a href="fabricacion_mixtures.html">Fixtures</a></li>
      <li><a href="automatizacion.html">Automatización</a></li>
      <li><a href="programacion_plc.html">Programación PLC</a></li>
      <li><a href="diseño_web.html">Diseño Web</a></li>
      
    </ul>
  </div>
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



<h1 class="page-title">Sobre Nosotros</h1>


<!-- Sección de Nosotros - ATOM -->
<section class="nosotros-hero" data-aos="fade-up">
  <div class="hero-nosotros">
    <div class="imagen-nosotros" data-aos="fade-right">
      <img src="image/ariel-.jpg" alt="Ariel Perales - Fundador de ATOM">
    </div>
    <div class="info-nosotros" data-aos="fade-left">
      <h2 class="styled-title">Ariel Perales</h2>
      <span class="subtitulo">Fundador de ATOM</span>
      <p class="descripcion">Ariel es un ingeniero mecatrónico con más de 6 años de experiencia en automatización industrial. Ha liderado proyectos en MAHLE, MAGNA, JOHN DEERE y otras firmas, fusionando diseño, robótica y electrónica para los parques industriales más importantes del norte del país.</p>
    </div>
  </div>
</section>

<section class="quienes-somos" data-aos="fade-up">
  <div class="contenedor">
    <h3 class="styled-title text-center">Conoce más de ATOM</h3>
    <p class="intro text-center">Somos una empresa de Automatización Industrial especializada en soluciones de diseño, programación y capacitación técnica en Saltillo y Monterrey.</p>
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

<section class="ventajas-atom" data-aos="fade-up">
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
  <h3 class="styled-title">¿Listo para automatizar tus procesos?</h3>
  <p>Contáctanos y recibe el respaldo técnico de una empresa confiable en automatización industrial.</p>
  <a href="#contacto" class="btn-principal">Contáctanos</a>
</section>

<style>
section {
  background: #ffffff !important;
  color: #111;
  padding: 80px 30px;
}
.page-title {
  font-size: 48px;
  font-weight: 900;
  color: #0a0a0a;
  text-align: center;
  margin: 60px 20px 40px;
  font-family: 'Poppins', sans-serif;
}

.styled-title {
  font-size: 36px;
  font-weight: 800;
  text-align: center;
  color:rgb(10, 10, 10);
  margin-bottom: 40px;
}

/* Sección sin fondo ni borde, solo padding para separación */
section.nosotros-hero {
  background: transparent !important;
  color: #111;
  padding: 80px 30px;
}

/* Contenedor flexible, alineación centrada vertical */
.hero-nosotros {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 60px;
  max-width: 1100px;
  margin: 0 auto;
  flex-wrap: nowrap; /* Sin wrap para que imagen e info queden lado a lado */
}

/* Info a la izquierda, con max ancho para legibilidad */
.info-nosotros {
  flex: 1;
  max-width: 600px;
}

/* Imagen a la derecha */
.imagen-nosotros {
  flex-shrink: 0;
  max-width: 320px;
}

.imagen-nosotros img {
  width: 100%;
  border-radius: 16px;
  box-shadow: 0 12px 28px rgba(0,0,0,0.15);
  display: block;
}

/* Titulos alineados a la izquierda */
.styled-title {
  font-size: 36px;
  font-weight: 800;
  color:rgb(8, 143, 184);
  margin-bottom: 12px;
  text-align: left;
}

.subtitulo {
  font-size: 16px;
  color: #555;
  font-weight: 600;
  margin-bottom: 20px;
  display: block;
  text-align: left;
}

.descripcion {
  font-size: 18px;
  line-height: 1.6;
  color: #222;
  text-align: left;
}

/* Responsive para móviles: stack vertical y centrado */
@media (max-width: 768px) {
  .hero-nosotros {
    flex-direction: column;
    text-align: center;
  }
  .info-nosotros {
    max-width: 100%;
  }
  .styled-title, .subtitulo, .descripcion {
    text-align: center;
  }
  .imagen-nosotros {
    max-width: 90%;
    margin-top: 30px;
  }
  .imagen-nosotros img {
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  }
}

.subtitulo {
  display: block;
  font-size: 16px;
  color: #555;
  font-weight: 600;
  margin: 10px 0 20px;
}

.servicios-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-top: 40px;
}

.servicio {
  background: #f9f9f9;
  padding: 20px;
  text-align: center;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s;
}

.servicio:hover {
  transform: translateY(-6px);
}

.servicio i {
  font-size: 28px;
  color: #007BFF;
  margin-bottom: 10px;
}

.cards-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 24px;
  margin-top: 40px;
}

.card {
  background: #f5f5f5;
  padding: 20px;
  border-radius: 10px;
  transition: transform 0.3s ease;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
}
.card i {
  font-size: 36px;
  color: #007BFF;
  margin-bottom: 16px;
  display: block;
  text-align: center;
}


.card:hover {
  transform: translateY(-6px);
}

.card h4 {
  color: #007BFF;
  font-size: 18px;
  margin-bottom: 10px;
}

.cta-contacto {
  background: linear-gradient(to right, #0ff, #00f);
  color: #fff;
  text-align: center;
  padding: 60px 20px;
  border-radius: 20px;
  margin: 60px 30px;
}

.cta-contacto .btn-principal {
  background: #fff;
  color: #111;
  padding: 14px 28px;
  border-radius: 10px;
  font-weight: bold;
  text-decoration: none;
  margin-top: 20px;
  display: inline-block;
}

@media (max-width: 768px) {
  .hero-nosotros {
    flex-direction: column;
    text-align: center;
  }

  .imagen-nosotros img {
    max-width: 90%;
  }
}
</style>

<!-- AOS y Font Awesome -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



</body>