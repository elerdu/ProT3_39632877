<div class="container mt-5">
    <h3>Usuarios eliminados</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($usuarios)): ?>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= esc($usuario['nombre']) . ' ' . esc($usuario['apellido']) ?></td>
                    <td><?= esc($usuario['email']) ?></td>
                    <td><?= esc($usuario['telefono']) ?></td>
                    <td>
                        <a href="<?= base_url('usuarios/restaurar/'.$usuario['id_usuario']) ?>" class="btn btn-success btn-sm">Restaurar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No hay usuarios eliminados.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
    <a href="<?= base_url('usuarios/listar') ?>" class="btn btn-secondary">Volver al panel</a>
</div>