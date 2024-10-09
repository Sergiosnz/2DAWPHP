<?php
    $frase="Me llamo Sergio";
    $vocales=["a"=> 0,"e"=> 0,"i"=> 0,"o"=> 0,"u"=> 0];
    $frase2=strtolower($frase);
    
    for($i=0;$i<strlen($frase2);$i++){
        if(array_key_exists($frase2[$i],$vocales)){
            $vocales[$frase2[$i]]++;
        }
    }
    print_r ($vocales);
    echo "<br>";
    echo "La suma total es: " . array_sum($vocales);
?>