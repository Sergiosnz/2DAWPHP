<?php
    $base = $_GET["base"];
    $base2=$base;
    $exponente= $_GET["exponente"];
    $bucle=1;
    do{
        $base=$base*$base2;
        $bucle++;
    }while($bucle<$exponente);
    
    echo $base;
?>