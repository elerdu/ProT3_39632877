<!-- Encabezado de Soporte -->
<div class="bg-white py-4 mb-4">
    <div class="container">
        <h1 class="h3 text-primary mb-1">Centro de Soporte</h1>
        <p class="text-muted mb-0">
        Aquí puedes comunicarte con nuestro equipo para resolver dudas, reportar problemas o enviar sugerencias.
        </p>
    </div>
</div>
<!-- Fin de encabezado -->
<div class="border-bottom my-4 shadow-sm"></div>
<!-- Inicio formulacio de soporte -->
<div class="container py-5">
    <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow rounded">
            <div class="card-body">
                <h2 class="text-center mb-4">Formulario de Soporte</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder=" nombre y apellido *" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="correo electrónico *" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="teléfono *" require>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="escriba aquí su mensaje *" required></textarea>
                    </div>

                    <div class="d-flex justify-content-evenly">
                        <button type="submit" class="btn btn-success w-45">Enviar</button>
                        <button type="reset" class="btn btn-danger w-45">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
