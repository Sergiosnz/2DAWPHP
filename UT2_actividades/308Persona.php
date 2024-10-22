<?php
    declare(strict_types=1);

    class Persona{


        

        public function __construct(private string $nombre, private string $apellidos){

           

        }

        public function getNom(): string{
            return $this->nombre;
        }

        public function getApellidos(): string{
            return $this->apellidos;
        }

        public function getNombreCompleto(): string{
            return $this->nombre . " " . $this->apellidos;
        }
        public static function toHtml(Persona $p): string{
            
        }


    }

    
?>