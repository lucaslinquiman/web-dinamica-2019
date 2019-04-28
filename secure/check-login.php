<?php

    error_reporting(0);
    require_once 'conexion.php';

    Class Login {
        private $usuario;
        private $clave;
        private $conexion_db;

        public function __construct(string $mail_usuario, string $clave_usuario, string $dbhost, string $dbuser, string $dbpass, string $dbname){
            $this->usuario = $mail_usuario;
            $this->clave = $clave_usuario;
            $this->conexion_db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        }

        /* Inicio Getters */
        public function getClave(): string{
            return $this->clave;
        }

        public function getUsuario(): string{
            return $this->usuario;
        }

        public function getConexion(){
            return $this->conexion_db;
        }
        /* Fin Getters */
        /* Metodos */
        private function estadoConexion(): bool{
            if (!$this->getConexion()){
                return false;
            } else {
                return true;
            }
        }

        public function checkLogin(){
            if ($this->estadoConexion()) {
                // Realizando consulta a la base
                $consulta = mysqli_query($this->getConexion(),"SELECT usuario, clave FROM users_admin WHERE usuario = '{$this->getUsuario()}'");
                //var_dump($consulta);
                $fila_sql = mysqli_fetch_assoc($consulta);
                $hash = $fila_sql['clave'];
                # var_dump($hash);
                if (password_verify($this->getClave(), $hash)) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $fila_sql['usuario'];
                    $_SESSION['start'] = time();
                    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

                    //echo "<div><strong>Bienvenido {$fila_sql['usuario']}</strong></div>";
                    header("Location: panel-control.php");

                } else {
                    echo "<div style='text-align: center'><strong>Error usuario o contraseña invalidos</strong></div>";
                    header("Refresh: 5; login.php");
                    //header("Location: login.php");
                }
            } else {
                echo "<div style='text-align: center'><strong>No hay conexion con la base de datos</strong></div>";
                header("Refresh: 5; login.php");
            }
        }
    }

    $user_login = $_POST['email'];
    $user_pass = $_POST['passwd'];

    $login = new Login($user_login,$user_pass,$db_host,$db_user,$db_pass,$db_name);
    //echo $login->getConexion();
    //var_dump($login->estadoConexion());
    $login->checkLogin();

?>