<?php

declare(strict_types=1);
const MIN_MAY=65;
const MAX_MAY=90;
const MIN_MIN=97;
const MAX_MIN=122;
function codificar($frase,int $desplazamiento) :string{



//$frase2 =  strtolower($frase);

$resultado ="";


if($desplazamiento>=0){
    for ( $i = 0 ; $i < strlen($frase); $i++){
        if(ord($frase[$i])>=MIN_MAY && ord($frase[$i])<=MAX_MAY){
            if(ord($frase[$i])+$desplazamiento>MAX_MAY){
                $resultado.=chr((MAX_MAY-ord($frase[$i]))+$desplazamiento+MIN_MAY-1);
            }else{
                $resultado .= chr(ord($frase[$i])+$desplazamiento);
            }

        }elseif(ord($frase[$i])>=MIN_MIN && ord($frase[$i])<=MAX_MIN){
            if(ord($frase[$i])+$desplazamiento>MAX_MIN){
                $resultado.=chr((MAX_MIN-ord($frase[$i]))+$desplazamiento+MIN_MIN-1);
            }else{
                $resultado .= chr(ord($frase[$i])+$desplazamiento);
            }
        }else{
            $resultado.=$frase[$i];
        }
        /*for ( $i = 0 ; $i < strlen($frase); $i++){
        $char = ord($frase[$i]);
        if($char>=97&&$char<=122){
            $char += $desplazamiento;
            $resultado .= chr($char);
        }else{
            $resultado .= chr($char);
        }
    
        //$resultado += str_replace($frase2[$i],$frase2[$i+=$desplazamiento],$frase2);
    }*/

}}else{
    $resultado= "El desplazamiento debe ser mayor o igual a 0";
}
return $resultado;
}
?>