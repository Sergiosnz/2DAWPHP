<?php
    $frase="Teresilabos cuartos de tabla";
    //CONTAR LETRAS SIN ESPACIOS
    $letras=0;
    for($i=0;$i<strlen($frase);$i++){
        if($frase[$i]!=" "){
            $letras++;
        }
    }
    echo $letras . "<br>";
    //NUMERO DE PALABRAS
    $palabras = explode(' ', $frase);
    echo count($palabras) . "<br>";
    //PALABRAS CON SU TAMAÑO
    for($i=0;$i<count($palabras);$i++){
        echo $palabras[$i] ." => ". strlen($palabras[$i]) . "<br>";
    }
?>