<?php
    declare(strict_types=1);
    class Empleado{

        private string $nombre;
        private string $apellidos;
        private float $sueldo;

        public function __construct(string $nombre, string $apellidos,float $sueldo){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->sueldo = $sueldo;
        }

        public function getNom(): string{
            return $this->nombre;
        }
        public function getApellidos(): string{
            return $this->apellidos;
        }
        public function getSueldo(): float{
            return $this->sueldo;
        }
        public function setNombre(string $nombre){
            $this->nombre = $nombre;
        }
        public function setApellidos(string $apellidos){
            $this->apellidos = $apellidos;
        }

        public function setSueldo(float $sueldo){
            $this->sueldo = $sueldo;
        }

        public function getNombreCompleto(): string{
            return $this->nombre . " " . $this->apellidos;
        }

        public function debePagarImpuestos() : bool{
            return $this->sueldo > 3333;
        }
    }

    $emp1 = new Empleado("Peppa", "Pig", 4444);
    $emp1->getNombreCompleto();
    echo $emp1->debePagarImpuestos()?"Debe pagar impuesto":"No debe pagar impuestos";
?>