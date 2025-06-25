<div class="container mt-5"> 
    <div class="row justify-center-md-center">
        <div class="col-12">
            <?php if (session()->getFlashdata('msg')):?>
            <div class= "alert alert-warning">
                <?= session()->getFlashdata('msg')?>
            </div>
            <?php endif;?>
            <?php if (session()->perfil_id == 1): ?>
                <div>
                    <img class="center" height="100px" width="100px" src="<?= base_url('assets/img/admin.jpeg'); ?>">
                </div>
                <hr>
                <h4>Listado de usuarios</h4>
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
                <?php if (isset($usuarios) && is_array($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= esc($usuario['nombre']) . ' ' . esc($usuario['apellido']) ?></td>
                    <td><?= esc($usuario['email']) ?></td>
                    <td><?= esc($usuario['telefono']) ?></td>
                    <td>
                        <a href="<?= base_url('usuarios/editar/'.$usuario['id_usuario']) ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="<?= base_url('usuarios/eliminar/'.$usuario['id_usuario']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr><td colspan="4">No hay usuarios para mostrar.</td></tr>
                <?php endif; ?>
                </tbody>
                </table>
                <a href="<?= base_url('usuarios/verEliminados') ?>" class="btn btn-secondary">Usuarios Eliminados</a>
                <?php elseif (session()->perfil_id == 2): ?>
                    <h2 class="text-center mb-4">Bienvenido Cliente</h2>
                    <div>
                        <img class="center" height="100px" width="100px" src="<?= base_url('assets/img/cliente.png'); ?>">
                    </div>
                <?php endif; ?>
        </div>
    </div>
</div>
