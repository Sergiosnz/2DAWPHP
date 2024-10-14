<?php
    $frase = "Teresilabos cuartos de tabla";
    $frase2 = strtolower($frase);

    // Eliminar los espacios y caracteres especiales
    $frase3 = str_replace([' ', ',', '.', '!', '?', '¿', '¡', '-'], '', $frase2);
    
    $alreves=strrev($frase3);

    if($frase3===$alreves){
        echo ("Es palindrona");
    }else{
        echo ("No es palindrona");
    }

    
    
?>  


    
    
    
   
