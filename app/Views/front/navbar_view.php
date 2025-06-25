<!-- Barra de navegación -->
<?php 
    $session = session();
    $nombre= $session->get('nombre');
    $perfil= $session->get('perfil_id');
    ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url ('principal')?>">
        <img src="<?php echo base_url ('assets/img/logonab3.jpeg')?>" class="rounded-circle alt="Inicio" width="40" height="40"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar para Admin-->
        <?php if (session()->perfil_id == 1): ?>
            <div class="btn btn-secundary active btnUser btn-sm">
                <a href="<?php echo base_url ('/usuarios/listar');?>"> ADMIN:  <?php echo session('nombre');?> </a>
            </div>
        <a class="navbar-brand" href="#"> </a>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('/principal');?>" tabindex="-1" aria-disabled="true">Inicio </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('/catalogo');?>" tabindex="-1" aria-disabled="true">Catalogo </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('/usuarios/listar');?>" tabindex="-1" aria-disabled="true">Panel admin </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('usuarios/verEliminados');?>" tabindex="-1" aria-disabled="true">Usuarios Eliminados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión </a>
            </li>
        </ul>
        </div>
        <!-- Fin navbar para admin-->
        <!-- NavBar para clientes LOGEADOS que pueden comprar productos-->
        <?php elseif (session()->perfil_id == 2): ?>
            <div class="btn btn-secundary active btnUser btn-sm">
                <a href=""> CLIENTE:  <?php echo session('nombre');?> </a>
            </div>
        <a class="navbar-brand" href="#"> </a>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="principal">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="catalogo">Catalogo</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorías </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="categoria.html?seccion=tecnologia">Tecnología</a></li>
                    <li><a class="dropdown-item" href="categoria.html?seccion=hogar">Hogar</a></li>
                    <li><a class="dropdown-item" href="categoria.html?seccion=moda">Moda</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión </a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" maxlength="50" type="search" placeholder="Buscá tu producto..." aria-label="Buscar">
            <button class="btn btn-outline-light" type="submit">🔍</button>
        </form>
        </div>
    <!-- Fin de Navbar para clientes LOGEADOS-->
    <?php else:?>
    <!-- Navbar para usuario NO LOGEADOS-->
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="principal">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="quienes_somos">¿Quiénes somos?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="acerca_de">Acerda de</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="catalogo">Catalogo</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorías </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="categoria.html?seccion=tecnologia">Tecnología</a></li>
                    <li><a class="dropdown-item" href="categoria.html?seccion=hogar">Hogar</a></li>
                    <li><a class="dropdown-item" href="categoria.html?seccion=moda">Moda</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registro">Registrarse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" maxlength="50" type="search" placeholder="Buscá tu producto..." aria-label="Buscar">
            <button class="btn btn-outline-light" type="submit">🔍</button>
        </form>
        <?php endif;?>
        </div>
    </div>
</nav>
<!-- Fin de barra de navegacion-->
