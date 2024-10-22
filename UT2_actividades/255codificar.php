<?php

declare(strict_types=1);



$frase = "Esto es una prueba";
$frase2 =  strtolower($frase);
$desplazamiento = 1;
$resultado ="";

for ( $i = 0 ; $i < strlen($frase2); $i++){

    $char = ord($frase2[$i]);
    if($char>=97&&$char<=122){
        $char += $desplazamiento;
        $resultado .= chr($char);
    }else{
        $resultado .= chr($char);
    }

    //$resultado += str_replace($frase2[$i],$frase2[$i+=$desplazamiento],$frase2);
}
echo $resultado;

?>