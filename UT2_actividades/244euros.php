<?php
    declare(strict_types=1);
    
    function peseta2euros(float $cantidad, float $cotizacion=166.36):float{
        $resultado=$cantidad/$cotizacion;
        return $resultado;
    }

    function euros2peseta(float $cantidad, float $cotizacion=166.36):float{
        $resultado=$cantidad*$cotizacion;
        return $resultado;
    } 


    
?>