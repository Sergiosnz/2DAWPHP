<?php

 declare(strict_types=1);
 class Persona{

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

     public static function toHtml(Persona $p) : string{

        $html = '<p> Nombre y apellidos: ' . $p->getNombreCompleto() . '</p>'; 

        return $html;

     }

 }

 class Empleado extends Persona{

    private static float $sueldoTope = 3333;
    private $telefonos = array();

    public static function setSueldoTope(float $sueldoTope) : void{
        self::$sueldoTope = $sueldoTope;
    }

    function __construct(
        private string $nombre,
        private string $apellidos,
        private string $edad,
        private float $sueldo = 1000,){

        parent::__construct($nombre,$apellidos,$edad);
       
    } 

    
    function getSueldo() : float {
        return $this->sueldo;
    }


    function getTelefonos() : array{
        return $this->telefonos;
    }

    public function debePagarImpuestos() {

        return $this->sueldo > self::$sueldoTope && $this->edad > 21;

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

    public static function toHTML(Persona $p): string {
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


}


?>