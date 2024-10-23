<?php

declare(strict_types=1);
class Empleado{
    
    private $arrTelefonos;
    static float $sueldo_tope = 3333;

    public function __construct(
        private string $nombre, 
        private string $apellidos,
        private float $sueldo = 1000){
        
        $this->arrTelefonos = array();
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
    public function getSueldoTope(): float{
        return self::$sueldo_tope;
    }
    
    public function getTelefonos() : array{
        return $this->arrTelefonos;
    }

    public function setSueldoTope(float $sueldoTope){
        self::$sueldo_tope = $sueldoTope;
    }
    
    public function setSueldo(float $sueldo){
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string{
        return $this->nombre . " " . $this->apellidos;
    }

    public function debePagarImpuestos() : bool{
        return $this->sueldo > self::$sueldo_tope;
    }

    public function anyadirTelefono(int $telefono):void{
        $this->arrTelefonos[] = $telefono;
    }

    public function listarTelefonos() : string{
        return implode(", ", $this->arrTelefonos);
    }

    public function vaciarTelefonos() : void{
        $arrTelefonos = [];
    }


    public static function toHtml(Empleado $emp): string{
        $html = '<p>Nombre completo: ' . $emp->getNombreCompleto() . '</p>';
            $html .= '<p>Sueldo: ' . $emp->getSueldo() . '</p>';
            
            $telefonos = $emp->getTelefonos();
            if (!empty($telefonos)) {
                $html .= '<p>Teléfonos:</p>';
                $html .= '<ol>';
                foreach ($telefonos as $telefono) {
                    $html .= '<li>' . $telefono . '</li>';
                }
                $html .= '</ol>';
            } else {
                $html .= '<p>No hay teléfonos registrados.</p>';
            }
    
            return $html;
    }
}


?>