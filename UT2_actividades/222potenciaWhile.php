<?php
    $base = $_GET["base"];
    $base2=$base;
    $exponente= $_GET["exponente"];
    $bucle=1;
    while($bucle<$exponente){
        $base=$base*$base2;
        $bucle++;
    }
    
    echo $base;
?>