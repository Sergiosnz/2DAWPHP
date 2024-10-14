<?php
    function convertirEnCani($cadena) {
        $resultado = '';
        $longitud = strlen($cadena);
        
        for ($i = 0; $i < $longitud; $i++) {
            // Aleatoriamente decide si el carácter será mayúscula o minúscula
            if (rand(0, 1)) {
                $resultado .= strtoupper($cadena[$i]);
            } else {
                $resultado .= strtolower($cadena[$i]);
            }
        }
        
        return $resultado;
    }
    
?>
