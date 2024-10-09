<?php

    $Array=[];
    $mayor=0;
    $menor=100;
    $suma=0;
    

    for($i=0;$i<33;$i++){
        $Array[$i]=rand(0,100);
    }
    for($i=0;$i<33;$i++){
        if($Array[$i]>$mayor){
            $mayor=$Array[$i];
        }elseif($Array[$i]<$menor){
            $menor=$Array[$i];
        }
        $suma=$suma+$Array[$i];
    }
        $media=$suma/33;
    echo "El mayor es: $mayor<br>";
    echo "El menor es: $menor<br>";
    echo "La media es: $media";
?>