<?php
    declare(strict_types=1);

    class Empleado{

        
        private $telefonos;

        public function __construct(private string $nombre, private string $apellidos, private float $sueldo=1000){
            
            $this->telefonos = array();
            
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

        

   


    public function aniadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }


    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }


    public function vaciarTelefonos(): void {
        $this->telefonos = array();
    }
        
    }

    $empl= new Empleado("Pepe", "Luis",4444);
    $empl2 = new Empleado("Luis", "Pepe");
    echo "Empleado 1 Sueldo: ".$empl->getSueldo() . "<br>";
    echo "Empleado 2 Sueldo: ".$empl2->getSueldo() . "<br>";
    
$empl->aniadirTelefono(123456789);
$empl->aniadirTelefono(987654321);
echo "Lista de teléfonos: " . $empl->listarTelefonos() . "<br>";

$empl->vaciarTelefonos();
echo "Teléfonos después de vaciar: " . $empl->listarTelefonos() . "<br>";
?>