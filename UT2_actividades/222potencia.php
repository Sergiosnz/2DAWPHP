<?php
    $base = $_GET["base"];
    $base2=$base;
    $exponente= $_GET["exponente"];
    

    for($i=1;$i<$exponente;$i++){
        $base=$base*$base2;
    }
    echo $base;
?>