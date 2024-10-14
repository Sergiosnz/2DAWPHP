<?php
    declare(strict_types=1);

    class Persona{
        private string $nombre;


        public function __construct(string $nombre){
            $this->nombre = $nombre;
        }

        public function imprimir(): void{
            echo "mi nombre es: ". $this->nombre;
        }

        
    }

    $p = new Persona("Sergio Sanz");
    $p->imprimir();
?>
