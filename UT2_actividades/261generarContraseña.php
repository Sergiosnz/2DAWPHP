<?php
include_once("260generador.php");

    function generarContraseña($tamaño):string{
        $contraseña="";

        for ($i=1;$i<$tamaño;$i++){
            $contraseña.=random_int(0,1)?letraleatoria():random_int(0,9);
        }
        return $contraseña;
    }


    echo generarContraseña(5);
?>