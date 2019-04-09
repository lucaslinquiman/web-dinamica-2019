<?php

// Sincronizacion GitHub - Taiga

// PHP 7.0

class Alumno{
    protected $nombre;
    protected $apellido;
    
    public function __construct(string $nombre, string $apellido){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }
    
    public function getNombre(): string{
        return $this->nombre;
    }

    public function getApellido(): string{
        return $this->apellido;
    }
}

$objeto = new Alumno("Lucas", "Linquiman");
echo $objeto->getNombre();

echo "Hola Mundo"; // prueba

?>
