<?php
    declare(strict_types=1);

    class Empleado{

        private string $nombre;
        private string $apellidos;
        private float $sueldo;

        public function __construct(string $nombre, string $apellidos, float $sueldo){

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

        public function setNombre(string $nombre): void{
            $this->nombre=$nombre;
        }

        public function setApellidos(string $apellidos): void{
            $this->apellidos=$apellidos;
        }

        public function setSueldo(float $sueldo): void{
            $this->sueldo=$sueldo;
        }

        public function getNombreCompleto(): string{
            return $this->nombre . " " . $this->apellidos;
        }

        public function debePagarImpuestos(): bool{
            return $this->sueldo > 3333 ? true : false;
        }



         private $telefonos = array();

    // Método para añadir un teléfono al array
    public function aniadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    // Método para listar los teléfonos separados por comas
    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    // Método para vaciar el array de teléfonos
    public function vaciarTelefonos(): void {
        $this->telefonos = array();
    }
        
    }

    $empl= new Empleado("Pepe", "Luis",4444);
    
$empl->aniadirTelefono(123456789);
$empl->aniadirTelefono(987654321);
echo "Lista de teléfonos: " . $empl->listarTelefonos() . "<br>";

$empl->vaciarTelefonos();
echo "Teléfonos después de vaciar: " . $empl->listarTelefonos() . "<br>";
?>