<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ATOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cursos">Cursos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	<section class="video-section">
        <video autoplay muted loop>
            <source src="image/Frase inspiracional.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
    </section>

    <section id="about" class="py-5" style="background: linear-gradient(to right,rgb(15, 25, 39),rgb(32, 50, 67),rgb(44, 62, 100)); color: white; position: relative;">
    <div class="container text-center">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Sobre Nosotros</h2>
        <p class="lead" style="font-size: 1.2rem; line-height: 1.8;">
            Somos una empresa apasionada por la innovación y el desarrollo tecnológico, dedicada a proporcionar servicios de alta calidad que transforman ideas en realidad.
        </p>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="icon-box">
                    <i class="bi bi-cpu" style="font-size: 3rem; color: #1cc5dc;"></i>
                    <h5 class="mt-3">Innovación</h5>
                    <p style="font-size: 0.9rem;">Adoptamos las tecnologías más avanzadas para llevar tu empresa al futuro.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <i class="bi bi-shield-check" style="font-size: 3rem; color: #1cc5dc;"></i>
                    <h5 class="mt-3">Seguridad</h5>
                    <p style="font-size: 0.9rem;">Garantizamos soluciones seguras y confiables para tus datos y sistemas.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box">
                    <i class="bi bi-graph-up-arrow" style="font-size: 3rem; color: #1cc5dc;"></i>
                    <h5 class="mt-3">Crecimiento</h5>
                    <p style="font-size: 0.9rem;">Impulsamos tu negocio con estrategias basadas en tecnología de punta.</p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id="servicios" class="py-5" style="background: #f8f9fa;">
    <div class="container text-center">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Nuestros Servicios</h2>
        <p class="lead mb-5">Descubre lo que podemos ofrecer para llevar tu empresa al siguiente nivel.</p>
        <div class="row">
            <div class="col-md-4">
				<img src="..." class="card-img-top" alt="...">
                <div class="service-card shadow-sm p-4" style="transition: transform 0.3s, box-shadow 0.3s; background: white; border-radius: 15px;">
                    <h5 class="mt-3">Diseño de piezas</h5>
                    <p style="font-size: 0.9rem;">Realizamos el Diseno de Piezas mecanicas.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card shadow-sm p-4" style="transition: transform 0.3s, box-shadow 0.3s; background: white; border-radius: 15px;">
                    <h5 class="mt-3">Maquinado industrial CNC</h5>
                    <p style="font-size: 0.9rem;">Trabajamos Maquinados Industriales CNC en Saltillo y Monterrey</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card shadow-sm p-4" style="transition: transform 0.3s, box-shadow 0.3s; background: white; border-radius: 15px;">
                    <h5 class="mt-3">Fabricación de Fixtures</h5>
                    <p style="font-size: 0.9rem;">Apoyamos a distintas maquiladoras en la Fabricacion de Fixtures en Saltillo y Monterrey.</p>
                </div>
            </div>
        </div>
        <br><br>
		<div class="row">
            <div class="col-md-4">
                <div class="service-card shadow-sm p-4" style="transition: transform 0.3s, box-shadow 0.3s; background: white; border-radius: 15px;">
                    <h5 class="mt-3">Servicio de automatización</h5>
                    <p style="font-size: 0.9rem;">A traves de nuestro servicio de automatización de líneas, ayudamos a las distintas empresas maquiladoras de Saltillo y Monterrey.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card shadow-sm p-4" style="transition: transform 0.3s, box-shadow 0.3s; background: white; border-radius: 15px;">
                    <h5 class="mt-3">Programación PLC</h5>
                    <p style="font-size: 0.9rem;">Servicio de Programación PLC y Programación PLC SIEMENS.</p>
                </div>
            </div>
        </div>
    </div>
    </section>

	<section id="cursos" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Nuestros Cursos</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Curso 1</h5>
                            <p class="card-text">Descripción breve del servicio 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Curso 2</h5>
                            <p class="card-text">Descripción breve del servicio 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Curso 3</h5>
                            <p class="card-text">Descripción breve del servicio 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
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

    <footer>
        <p>&copy; 2025 Empresa. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
