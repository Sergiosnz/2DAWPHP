<?php
    $num=46;
    $segundo=$num%10;
    $primero=$num%100;
    $resultado = intdiv($segundo . $primero ,10);
    echo $resultado;
?>