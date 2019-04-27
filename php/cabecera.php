<div class="cabecera">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand titulo" href="#">
            <img src="/imagenes/005_logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="menu bordes">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'];?>">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/nosotros.php';?>">Quienes somos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Catalogo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Galeria de Imágenes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_ADDR'].'/form-contacto.php';?>">Contacto</a>
        </li>
    </ul>
</div>
