<?php

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
}

echo "Hola Mundo"; // prueba



?>
