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
        string $nombre,
        string $apellidos,
        string $edad,
        ){

        parent::__construct($nombre,$apellidos,$edad);
        $this->sueldoTope = 3333;
       
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

    public abstract function calcularSueldo() : float;

    public function debePagarImpuestos() {

        return $this->calcularSueldo() > $this->sueldoTope && $this->edad > 21;

    }
 }

 class Empleado extends Trabajador{

    private float $sueldoTope;
       

    function __construct(
        string $nombre,
        string $apellidos,
        string $edad,
        private int $horasTrabajadas,
        private float $precioPorHora,
        ){

        parent::__construct($nombre,$apellidos,$edad);
    
       
    } 

    public function setSueldoTope(float $sueldoTope) : void{
        $this->$sueldoTope = $sueldoTope;
    }
    

    public function calcularSueldo(): float{
        return $this->horasTrabajadas * $this->precioPorHora;
    }

    public function toHTML(Persona $p): string {
        if($p instanceof Empleado){
            $html = '<p>Nombre completo: ' . $p->getNombreCompleto(). '</p>';
            $html .= '<p>Sueldo: ' . $p->calcularSueldo() . '</p>';
            
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
        return self::class . ":" . $this->nombre . " " . $this->apellidos . " " .$this->calcularSueldo() ." ". $this->edad . " Telefonos: " . $this->listarTelefonos();
    }


}

class Gerente extends Trabajador{
     

    function __construct(
        string $nombre,
        string $apellidos,
        string $edad,
        private float $salario,
        ){

        parent::__construct($nombre,$apellidos,$edad);
    
       
    } 

    public function setSueldoTope(float $sueldoTope) : void{
        $this->$sueldoTope = $sueldoTope;
    }
    

    public function calcularSueldo(): float{
        return $this->salario + $this->salario *$this->getEdad()/100;
    }

    public function toHTML(Persona $p): string {
        if($p instanceof Empleado){
            $html = '<p>Nombre completo: ' . $p->getNombreCompleto() . '</p>';
            $html .= '<p>Sueldo: ' . $p->calcularSueldo() . '</p>';
            
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
        return self::class . ":" . $this->nombre . " " . $this->apellidos . " " .$this->calcularSueldo() ." ". $this->edad . " Telefonos: " . $this->listarTelefonos();
    }


}

?>