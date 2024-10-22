<?php

    $frase = "En un lugar de La Mancha";

    $resultado="";

    for($i=1;$i<strlen($frase);$i+=2){
        $resultado .= $frase[$i];
    }
    echo $resultado;

?>