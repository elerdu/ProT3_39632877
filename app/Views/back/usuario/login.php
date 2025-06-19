<!-- Login de la web-->
<div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Iniciar sesión</h2>
                        <!-- Mensaje de error-->
                        <?php if(session()->getFlashdata('msg')):?>
                            <div class="alert alert-warning">
                                <?= session()->getFlashdata('msg')?>
                            </div>
                        <?php endif;?>
                        <form method="post" action="<?php echo base_url('/enviarlogin') ?>" >
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="correo@algo.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="pass" class="form-control" placeholder="contraseña" required>
                            </div>

                            <div class="d-flex justify-content-evenly mb-3">
                                <button type="submit" class="btn btn-success">Ingresar</button>
                                <button type="reset" class="btn btn-danger">Cancelar</button>
                            </div>

                            <p class="text-center mt-3 mb-0">
                                ¿No estás registrado? <a href="registro">Registrate aquí</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Fin login de la web-->