<html>
<head>
    <meta charset="utf-8">
    <title>Login administrador Tiempos de Barro</title>
    <style>
        body {

            margin: 0;
            padding: 0;
            background-image: url("/imagenes/004.png");
        }

        .login-contenedor {
            background: transparent;
            margin: auto;
            margin-top: 15vh;
            max-width: 300px;
            height: auto;
            padding: 2%;
            border: 2px solid darkslategrey;
            border-radius: 100px;
        }

        .login-contenedor .header-login {
            text-align: center;
            font-family: FreeMono;
            font-size: 16px;
            font-style: italic;
        }

        .login-contenedor .form-login label {
            width: 70%;
            padding: 5px;
            margin: auto;
            font-family: FreeMono;
            font-size: 14px;
            font-style: normal;
        }

        .login-contenedor .form-login input {
            margin-left:10%;
            margin-right: 10%;
            margin-top: 5px;
            margin-bottom: 5px;
            width: 80%;
            padding: 5px;
        }

        .login-contenedor .form-login div button {
            display: block;
            margin: 5px auto;
            padding: 2px;
            font-family: FreeMono;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-contenedor">
        <div class="header-login">
            <div class="titulo">
                <h2>Login</h2>
            </div>
            <div class="imagen">
                <img src="/imagenes/006.png" width="130px" height="auto">
            </div>
        </div>
        <div class="form-login">
            <form method="post" action="check-login.php">
                <label for="email">Email</label>
                <input id="email" name="email" type="email">

                <label for="passwd">Clave</label>
                <input id="passwd" name="passwd" type="password">

                <div>
                    <button type="submit">Ingresar</button>
                </div>
            </form>
        </div>
    </div>

</body>


</html>