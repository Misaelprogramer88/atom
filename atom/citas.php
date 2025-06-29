<section id="agendar-cita" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Agenda tu Cita</h2>
        <form action="guardar_cita.php" method="POST">
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

