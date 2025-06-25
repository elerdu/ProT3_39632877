<div class="container mb-5 mt-5">
        <div class="row justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body">
                    <h2 class="card-title text-center mb-4">Editar Usuario</h2>
                    <form method="post" action="<?= base_url('usuarios/actualizar/'.$usuario['id_usuario']) ?>">
                        <?= csrf_field() ?>
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?= esc($usuario['nombre']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Apellido</label>
                        <input type="text" name="apellido" class="form-control" value="<?= esc($usuario['apellido']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?= esc($usuario['email']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" class="form-control" value="<?= esc($usuario['telefono']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Dirección</label>
                        <input type="text" name="direccion" class="form-control" value="<?= esc($usuario['direccion']) ?>">
                    </div>
                    <div class="mb-3">
                        <label>Código Postal</label>
                        <input type="text" name="codigo_postal" class="form-control" value="<?= esc($usuario['codigo_postal']) ?>">
                    </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="<?= base_url('usuarios/listar') ?>" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>