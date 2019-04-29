<?php
    session_start();
    error_reporting(0);

    /* Comentar luego */
    foreach ($_SESSION as $key => $valor){
        echo $key." => ".$valor."<br>";
    }
    /*  */
?>

<html>

    <?php
        require_once '../php/header.php';
    ?>

    <body>
    <?php
        if (!isset($_SESSION['loggedin'])) {
            echo "<div class='alert alert-danger mt-4' role='alert'><h4>No iniciaste sesion!!!</h4></div>";
            header("Refresh: 5; login.php");
            exit;
        }

        $sesion_tiempo = time();
        if ($sesion_tiempo > $_SESSION['expire']) {
            session_destroy();
            echo "<div class='alert alert-danger mt-4' role='alert'><h4>La sesion expiro. Vuelve a iniciar sesion.</h4></div>";
            header("Refresh: 5; login.php");
            exit;
        }
    ?>

        <div class="container">
            <div class="cabecera">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand titulo" href="/index.php">
                        <img src="/imagenes/005_logo.png">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li>
                                <a class="nav-link">
                                    <?php
                                        echo $_SESSION['name'];
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="/secure/logout.php">Logout</a>
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
                        <a class="nav-link" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/form-contacto.php';?>">Contacto</a>
                    </li>
                </ul>
            </div>

        </div>
    </body>
</html>
