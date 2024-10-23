<?php
    declare(strict_types=1);
    class Persona{

        function __construct(
            private string $nombre,
            private string $apellidos,

        ){}
        
        public function getNombre() : string{
            return $this->nombre;
        }

        public function getApellidos() : string{
            return $this->apellidos;
        }

        public function setNombre(string $nombre){
            $this->nombre = $nombre;
            
        }

        public function setApellidos(string $apellidos){
            $this->apellidos = $apellidos;
        }

        function getNombreCompleto() : string {
            return $this->nombre . " " . $this->apellidos;

        }

    }

?>