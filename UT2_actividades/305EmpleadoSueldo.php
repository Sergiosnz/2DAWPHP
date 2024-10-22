<?php
    declare(strict_types=1);

    class Empleado{


        private $telefonos;
        static float $SUELDO_TOPE = 3333;

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

        public function getNombreCompleto(): string{
            return $this->nombre . " " . $this->apellidos;
        }

        public function debePagarImpuestos(): bool{
            return $this->sueldo > self::$SUELDO_TOPE;
        }

        public function getSueldoTope(){
            return self::$SUELDO_TOPE;
        }
        
        public function setSueldoTope(){
            self::$SUELDO_TOPE = $SUELDO_TOPE;
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
    
    echo $empl->debePagarImpuestos() . "<br>";
$empl->aniadirTelefono(123456789);
$empl->aniadirTelefono(987654321);
echo "Lista de teléfonos: " . $empl->listarTelefonos() . "<br>";

$empl->vaciarTelefonos();
echo "Teléfonos después de vaciar: " . $empl->listarTelefonos() . "<br>";
?>