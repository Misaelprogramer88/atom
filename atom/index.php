<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Empresa</a>
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
                        <a class="nav-link" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Cursos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1>Bienvenidos a Nuestra Empresa</h1>
            <p>Ofrecemos soluciones innovadoras para tus necesidades.</p>
            <a href="#about" class="btn btn-primary mt-3">Conócenos</a>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container text-center">
            <h2>Acerca de Nosotros</h2>
            <p class="lead">Somos una empresa dedicada a proporcionar servicios de alta calidad para nuestros clientes.</p>
        </div>
    </section>

    <section id="services" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Nuestros Servicios</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Servicio 1</h5>
                            <p class="card-text">Descripción breve del servicio 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Servicio 2</h5>
                            <p class="card-text">Descripción breve del servicio 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Servicio 3</h5>
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
