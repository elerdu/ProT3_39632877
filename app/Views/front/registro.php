<!-- Registro de la web-->
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-light text-black">
                        <h2 class="mb-4 text-center ">Registro de Usuario</h2>
                    <?php $validation = \Config\Services::validation();?>
                    <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                        <?=csrf_field();?>
                        <?=csrf_field();?>
                        <?php if (!empty (session()->getFlashdata('fail'))):?>
                            <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                            <?php endif?>
                        <?php if (!empty (session()->getFlashdata('success'))):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                        <?php endif?>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre/s</label>
                                <input name="nombre" type="text" class="form-control" placeholder="nombre/s *" id="nombre" required>
                            <!-- Error -->
                            <?php if ($validation->getError('nombre')) {?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('nombre'); ?>
                                </div>
                            <?php }?>
                            </div>
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido/s</label>
                                <input name="apellido" type="text" class="form-control" placeholder="apellido/s *" id="apellido" required>
                                <!-- Error -->
                            <?php if ($validation->getError('apellido')) {?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php }?>
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input name="direccion" type="text" class="form-control" placeholder="dirección *" id="direccion" required>
                                <!-- Error -->
                            <?php if ($validation->getError('direccion')) {?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('direccion'); ?>
                                </div>
                            <?php }?>
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="codigoPostal" class="form-label">Código Postal</label>
                                <input name="codigo_postal" type="text" class="form-control" placeholder="código postal *" id="codigoPostal" required>
                                <!-- Error -->
                            <?php if ($validation->getError('codigo_postal')) {?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('codigo_postal'); ?>
                                </div>
                            <?php }?>
                            </div>
                            <div class="col-md-4">
                                <label for="telefono" class="form-label">Número de Teléfono</label>
                                <input name="telefono" type="tel" class="form-control" placeholder="número de teléfono *" id="telefono" required>
                                <!-- Error -->
                            <?php if ($validation->getError('telefono')) {?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('telefono'); ?>
                                </div>
                            <?php }?>
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input name="email" type="email" class="form-control" placeholder="correo electrónico *" id="email" required>
                                <!-- Error -->
                            <?php if ($validation->getError('email')) {?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php }?>
                            </div>
                        </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input name="pass" type="password" class="form-control" placeholder="contraseña *" id="contrasena" required>
                                <!-- Error -->
                            <?php if ($validation->getError('pass')) {?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('pass'); ?>
                                </div>
                            <?php }?>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <button type="reset" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin del registro-->
