<?php
    declare(strict_types=1);
    include_once("312Trabajador.php");

    class Empresa{

        function __construct(
            private string $nombre,
            private string $direccion,
            private $arrTrabajadores = [],
        ){}

    public function getNom(): string{
        return $this->nombre;
    }
    public function getDireccion(): string{
        return $this->direccion;
    }
    public function getTrabajadores(): array{
        return $this->arrTrabajadores;
    }

    public function anyadirTrabajador(Trabajador $t){
        $this->getTrabajadores()[] =$t;
    }

    public function listarTrabajadoresHtml() : string   {
        $listado = "";
        foreach($this->arrTrabajadores as $t)
            $listado .= Trabajador::toHtml($t);

        return $listado;
    }//lista los trabajadores y los acumula para entregarlos todos juntos

    public function getCosteNominas(): float{

        $totalNominas = 0;

        foreach($this->arrTrabajadores as $t)
            $totalNominas += $t->calcularSueldo();   
        return $totalNominas;

    }

    }
?>