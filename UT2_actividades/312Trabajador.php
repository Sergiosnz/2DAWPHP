<?php

 declare(strict_types=1);
 abstract class Persona{

     function __construct(
         private string $nombre,
         private string $apellidos,
         private int $edad

     ){}
     
     public function getNombre() : string{
         return $this->nombre;
     }

     public function getApellidos() : string{
         return $this->apellidos;
     }

     public function getEdad() : int{
        return $this->edad;
    }

     public function setNombre(string $nombre){
         $this->nombre = $nombre;   
     }

     public function setApellidos(string $apellidos){
         $this->apellidos = $apellidos;
     }

     public function setEdad(int $edad){
        $this->edad = $edad;
    }

     function getNombreCompleto() : string {
         return $this->nombre . " " . $this->apellidos;

     }

     public abstract function toHtml(Persona $p) : string;

     public function __toString(): string{

        return self::class . ": " . $this->nombre . " " . $this->apellidos . " " . $this->edad;

     }

 }
 abstract class Trabajador extends Persona{
    private $telefonos = array();
    private float $sueldoTope;

    function __construct(
        private string $nombre,
        private string $apellidos,
        private string $edad,
        private float $sueldo = 1000,){

        parent::__construct($nombre,$apellidos,$edad);
        $this->sueldoTope = 3333;

    } 

    public function setSueldoTope(float $sueldoTope) : void{
        $this->$sueldoTope = $sueldoTope;
    }

    function getTelefonos() : array{
        return $this->telefonos;
    }

    public function anyadirTelefono(int $telefono) : void {

        array_push($this->telefonos,$telefono);

    }

    public function listarTelefonos() : string {
       
        return implode(' ,',$this->telefonos);

    }

    public function vaciarTelefono() : void {

        $this->telefonos = array();
    }

    public abstract function CalcularSueldo(): float;    

    public function debePagarImpuestos() : bool {

        return $this->sueldo > self::$sueldoTope && $this->edad > 21;

    }
 }
 class Empleado extends Trabajador{

    
    private int $horasTrabajadas;
    private int $precioPorHora;
    

    function __construct(
        private string $nombre,
        private string $apellidos,
        private string $edad,
        private float $sueldo = 1000,){

        parent::__construct($nombre,$apellidos,$edad,$sueldoTope);
        $this->horasTrabajadas = 8;
        $this->precioPorHora = 12;
       
    } 

    
    function getSueldo() : float {
        return $this->sueldo;
    }

    public function CalcularSueldo(int $horasTrabajadas, int $precioPorHora): int{
        $this->precioPorHora = $precioPorHora;
        $this->horasTrabajadas = $horasTrabajadas;

        return ($this->horasTrabajadas*$this->precioPorHora);
    }

    public function toHTML(Persona $p): string {
        if($p instanceof Empleado){
            $html = '<p>Nombre completo: ' . $p->getNombreCompleto() . '</p>';
            $html .= '<p>Sueldo: ' . $p->getSueldo() . '</p>';
            
            $telefonos = $p->getTelefonos();
            if (!empty($telefonos)) {
                $html .= '<p>Teléfonos:</p>';
                $html .= '<ul>';
                foreach ($telefonos as $telefono) {
                    $html .= '<li>' . $telefono . '</li>';
                }
                $html .= '</ul>';
            } else {
                $html .= '<p>No hay teléfonos registrados.</p>';
            }
        }
        return $html;
    }

    public function __toString() : string{
        return self::class . ":" . $this->nombre . " " . $this->apellidos . " " .$this->sueldo ." ". $this->edad . " Telefonos: " . $this->listarTelefonos();
    }


}

class Gerente extends Trabajador{
    private string $salario;

    function __construct(
        private string $nombre,
        private string $apellidos,
        private string $edad,
        private float $sueldo = 1000,){

        parent::__construct($nombre,$apellidos,$edad);
        $this->sueldoTope = 3333;
        $this->salario = 1300;
        
       
    } 


    public function CalcularSueldo(string $salario, string $edad):string{
        $this->salario = $salario;
        $this->edad = $edad;

        return ($this->salario+(($this->salario*$this->edad)/100));
    }
}


?>