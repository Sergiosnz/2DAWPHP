<?php
  
    declare(strict_types=1);
    include_once '307Persona.php';
    class Empleado extends Persona{

        private static float $sueldoTope = 3333;
        private $telefonos = array();

        public static function setSueldoTope(float $sueldoTope) : void{
            self::$sueldoTope = $sueldoTope;
        }

        function __construct(
            private string $nombre,
            private string $apellidos,
            private float $sueldo = 1000,){

            parent::__construct($nombre,$apellidos);
           
        } 

        
        function getSueldo() : float {
            return $this->sueldo;
        }

    
        function getTelefonos() : array{
            return $this->telefonos;
        }

        public function debePagarImpuestos() {

            return $this->sueldo > self::$sueldoTope;

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

        public static function toHTML(Persona $emp): string {
            $html = '<p>Nombre completo: ' . $emp->getNombreCompleto() . '</p>';
            if( $emp instanceof Empleado){
                $html .= '<p>Sueldo: ' . $emp->getSueldo() . '</p>';
                
                $telefonos = $emp->getTelefonos();
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
            }//fin if instanceof
            return $html;
        }


    }

?>