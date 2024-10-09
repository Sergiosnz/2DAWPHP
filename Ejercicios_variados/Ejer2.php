<?php
    $min=1000;
    $num=60;
    $horas=intdiv($min,$num);
    $minutos=$min%$num;
    echo $horas . 'Horas' . 'y' . $minutos . 'minutos';
?>