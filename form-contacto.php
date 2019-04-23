<html>
    <?php
        require_once 'php/header.php';
    ?>

    <body>
        <div class="container">

            <?php
                require_once 'php/cabecera.php';
            ?>

            <div class="contenido">
                <div class="direccion">
                    <h3 class="text-center">Información de Contacto</h3>
                    <p><i>Tiempos de Barro</i> se encuentra en la ciudad de Córdoba Capital, Córdoba, Argentina.</p>
                    <br>

                    <div class="row borde-blanco">
                        <div class="col-6">
                            <img src="images/img14.jpg" class="rounded-circle">
                        </div>
                        <div class="col-6">
                            <img src="images/img29.jpg" class="rounded-circle">
                        </div>
                    </div>
                    <br>

                    <address>
                        <i>
                        <strong>Fábrica Tiempos de Barro</strong>
                        <br>
                        Avenida Siempre Viva 12345
                        <br>
                        Córdoba Capital, Córdoba - CP. 1234
                        <br>
                        Telefono: xxx 23390 12340
                        <br>
                        </i>
                    </address>
                    <br>

                    <address>
                        <i>
                        <strong>Local de Venta</strong>
                            <br>
                            Avenida Somos lo qe Somos 9876
                            <br>
                            Córdoba Capital, Córdoba - CP. 1234
                            <br>
                            Telefono: xxx 1111 23456
                            <br>
                        </i>
                    </address>

                </div>

                <div class="formulario">
                    <h3 class="text-center">Formulario de contacto</h3>

                    <form action="" method="post" name="form-contacto">
                        <label>Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre">

                        <label>Correo Electronico</label>
                        <input type="email" name="correo" placeholder="tiempos@debarro.com.ar">

                        <label>Numero de Telefono</label>
                        <input type="tel" name="telefono" placeholder="02920 15001234">

                        <label>Asunto</label>
                        <input type="text" name="asunto" placeholder="Asunto de la consulta">

                        <label>Mensaje</label>
                        <textarea name="mensaje" placeholder="Detalle de consulta" maxlength="400" wrap="hard" rows="8"></textarea>

                        <div>
                            <input type="submit" value="Enviar Consulta">
                        </div>
                    </form>
                </div>
            </div>


            <?php
                require_once 'php/footer.php';
            ?>
        </div>
    </body>
</html>

