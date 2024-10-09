<?php

    $inicio = $_GET["inicio"];
    $fin = $_GET["fin"];
    $suma=0;

    for ($i=$inicio; $i<$fin;$i++){
        
            $suma=$suma+$i;
    }
    echo $suma;


?>